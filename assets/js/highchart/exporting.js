/**
 * Highcharts JS v11.2.0 (2023-10-30)
 *
 * Exporting module
 *
 * (c) 2010-2021 Torstein Honsi
 *
 * License: www.highcharts.com/license
 */ !(function (e) {
	"object" == typeof module && module.exports
		? ((e.default = e), (module.exports = e))
		: "function" == typeof define && define.amd
		? define("highcharts/modules/exporting", ["highcharts"], function (t) {
				return e(t), (e.Highcharts = t), e;
		  })
		: e("undefined" != typeof Highcharts ? Highcharts : void 0);
})(function (e) {
	"use strict";
	var t = e ? e._modules : {};
	function n(e, t, n, i) {
		e.hasOwnProperty(t) ||
			((e[t] = i.apply(null, n)),
			"function" == typeof CustomEvent &&
				window.dispatchEvent(
					new CustomEvent("HighchartsModuleLoaded", {
						detail: { path: t, module: e[t] },
					})
				));
	}
	n(t, "Core/Chart/ChartNavigationComposition.js", [], function () {
		var e;
		return (
			(function (e) {
				e.compose = function (e) {
					return e.navigation || (e.navigation = new t(e)), e;
				};
				class t {
					constructor(e) {
						(this.updates = []), (this.chart = e);
					}
					addUpdate(e) {
						this.chart.navigation.updates.push(e);
					}
					update(e, t) {
						this.updates.forEach((n) => {
							n.call(this.chart, e, t);
						});
					}
				}
				e.Additions = t;
			})(e || (e = {})),
			e
		);
	}),
		n(
			t,
			"Extensions/Exporting/ExportingDefaults.js",
			[t["Core/Globals.js"]],
			function (e) {
				let { isTouchDevice: t } = e;
				return {
					exporting: {
						allowTableSorting: !0,
						type: "image/png",
						url: "https://export.highcharts.com/",
						pdfFont: {
							normal: void 0,
							bold: void 0,
							bolditalic: void 0,
							italic: void 0,
						},
						printMaxWidth: 780,
						scale: 2,
						buttons: {
							contextButton: {
								className: "highcharts-contextbutton",
								menuClassName: "highcharts-contextmenu",
								symbol: "menu",
								titleKey: "contextButtonTitle",
								menuItems: [
									"viewFullscreen",
									"printChart",
									"separator",
									"downloadPNG",
									"downloadJPEG",
									"downloadPDF",
									"downloadSVG",
								],
							},
						},
						menuItemDefinitions: {
							viewFullscreen: {
								textKey: "viewFullscreen",
								onclick: function () {
									this.fullscreen && this.fullscreen.toggle();
								},
							},
							printChart: {
								textKey: "printChart",
								onclick: function () {
									this.print();
								},
							},
							separator: { separator: !0 },
							downloadPNG: {
								textKey: "downloadPNG",
								onclick: function () {
									this.exportChart();
								},
							},
							downloadJPEG: {
								textKey: "downloadJPEG",
								onclick: function () {
									this.exportChart({ type: "image/jpeg" });
								},
							},
							downloadPDF: {
								textKey: "downloadPDF",
								onclick: function () {
									this.exportChart({ type: "application/pdf" });
								},
							},
							downloadSVG: {
								textKey: "downloadSVG",
								onclick: function () {
									this.exportChart({ type: "image/svg+xml" });
								},
							},
						},
					},
					lang: {
						viewFullscreen: "View in full screen",
						exitFullscreen: "Exit from full screen",
						printChart: "Print chart",
						downloadPNG: "Download PNG image",
						downloadJPEG: "Download JPEG image",
						downloadPDF: "Download PDF document",
						downloadSVG: "Download SVG vector image",
						contextButtonTitle: "Chart context menu",
					},
					navigation: {
						buttonOptions: {
							symbolSize: 14,
							symbolX: 14.5,
							symbolY: 13.5,
							align: "right",
							buttonSpacing: 3,
							height: 28,
							verticalAlign: "top",
							width: 28,
							symbolFill: "#666666",
							symbolStroke: "#666666",
							symbolStrokeWidth: 3,
							theme: { padding: 5 },
						},
						menuStyle: {
							border: "none",
							borderRadius: "3px",
							background: "#ffffff",
							padding: "0.5em",
						},
						menuItemStyle: {
							background: "none",
							borderRadius: "3px",
							color: "#333333",
							padding: "0.5em",
							fontSize: t ? "0.9em" : "0.8em",
							transition: "background 250ms, color 250ms",
						},
						menuItemHoverStyle: { background: "#f2f2f2" },
					},
				};
			}
		),
		n(t, "Extensions/Exporting/ExportingSymbols.js", [], function () {
			var e;
			return (
				(function (e) {
					let t = [];
					function n(e, t, n, i) {
						return [
							["M", e, t + 2.5],
							["L", e + n, t + 2.5],
							["M", e, t + i / 2 + 0.5],
							["L", e + n, t + i / 2 + 0.5],
							["M", e, t + i - 1.5],
							["L", e + n, t + i - 1.5],
						];
					}
					function i(e, t, n, i) {
						let o = i / 3 - 2;
						return [].concat(
							this.circle(n - o, t, o, o),
							this.circle(n - o, t + o + 4, o, o),
							this.circle(n - o, t + 2 * (o + 4), o, o)
						);
					}
					e.compose = function (e) {
						if (-1 === t.indexOf(e)) {
							t.push(e);
							let o = e.prototype.symbols;
							(o.menu = n), (o.menuball = i.bind(o));
						}
					};
				})(e || (e = {})),
				e
			);
		}),
		n(
			t,
			"Extensions/Exporting/Fullscreen.js",
			[t["Core/Renderer/HTML/AST.js"], t["Core/Utilities.js"]],
			function (e, t) {
				let { addEvent: n, fireEvent: i } = t,
					o = [];
				function r() {
					this.fullscreen = new s(this);
				}
				class s {
					static compose(e) {
						t.pushUnique(o, e) && n(e, "beforeRender", r);
					}
					constructor(e) {
						(this.chart = e), (this.isOpen = !1);
						let t = e.renderTo;
						!this.browserProps &&
							("function" == typeof t.requestFullscreen
								? (this.browserProps = {
										fullscreenChange: "fullscreenchange",
										requestFullscreen: "requestFullscreen",
										exitFullscreen: "exitFullscreen",
								  })
								: t.mozRequestFullScreen
								? (this.browserProps = {
										fullscreenChange: "mozfullscreenchange",
										requestFullscreen: "mozRequestFullScreen",
										exitFullscreen: "mozCancelFullScreen",
								  })
								: t.webkitRequestFullScreen
								? (this.browserProps = {
										fullscreenChange: "webkitfullscreenchange",
										requestFullscreen: "webkitRequestFullScreen",
										exitFullscreen: "webkitExitFullscreen",
								  })
								: t.msRequestFullscreen &&
								  (this.browserProps = {
										fullscreenChange: "MSFullscreenChange",
										requestFullscreen: "msRequestFullscreen",
										exitFullscreen: "msExitFullscreen",
								  }));
					}
					close() {
						let e = this,
							t = e.chart,
							n = t.options.chart;
						i(t, "fullscreenClose", null, function () {
							e.isOpen &&
								e.browserProps &&
								t.container.ownerDocument instanceof Document &&
								t.container.ownerDocument[e.browserProps.exitFullscreen](),
								e.unbindFullscreenEvent &&
									(e.unbindFullscreenEvent = e.unbindFullscreenEvent()),
								t.setSize(e.origWidth, e.origHeight, !1),
								(e.origWidth = void 0),
								(e.origHeight = void 0),
								(n.width = e.origWidthOption),
								(n.height = e.origHeightOption),
								(e.origWidthOption = void 0),
								(e.origHeightOption = void 0),
								(e.isOpen = !1),
								e.setButtonText();
						});
					}
					open() {
						let e = this,
							t = e.chart,
							o = t.options.chart;
						i(t, "fullscreenOpen", null, function () {
							if (
								(o &&
									((e.origWidthOption = o.width),
									(e.origHeightOption = o.height)),
								(e.origWidth = t.chartWidth),
								(e.origHeight = t.chartHeight),
								e.browserProps)
							) {
								let i = n(
										t.container.ownerDocument,
										e.browserProps.fullscreenChange,
										function () {
											e.isOpen
												? ((e.isOpen = !1), e.close())
												: (t.setSize(null, null, !1),
												  (e.isOpen = !0),
												  e.setButtonText());
										}
									),
									o = n(t, "destroy", i);
								e.unbindFullscreenEvent = () => {
									i(), o();
								};
								let r = t.renderTo[e.browserProps.requestFullscreen]();
								r &&
									r.catch(function () {
										alert("Full screen is not supported inside a frame.");
									});
							}
						});
					}
					setButtonText() {
						let t = this.chart,
							n = t.exportDivElements,
							i = t.options.exporting,
							o = i && i.buttons && i.buttons.contextButton.menuItems,
							r = t.options.lang;
						if (
							i &&
							i.menuItemDefinitions &&
							r &&
							r.exitFullscreen &&
							r.viewFullscreen &&
							o &&
							n
						) {
							let t = n[o.indexOf("viewFullscreen")];
							t &&
								e.setElementHTML(
									t,
									this.isOpen
										? r.exitFullscreen
										: i.menuItemDefinitions.viewFullscreen.text ||
												r.viewFullscreen
								);
						}
					}
					toggle() {
						this.isOpen ? this.close() : this.open();
					}
				}
				return s;
			}
		),
		n(
			t,
			"Core/HttpUtilities.js",
			[t["Core/Globals.js"], t["Core/Utilities.js"]],
			function (e, t) {
				let { doc: n } = e,
					{ createElement: i, discardElement: o, merge: r, objectEach: s } = t,
					l = {
						ajax: function (e) {
							let t = {
									json: "application/json",
									xml: "application/xml",
									text: "text/plain",
									octet: "application/octet-stream",
								},
								n = new XMLHttpRequest();
							function i(t, n) {
								e.error && e.error(t, n);
							}
							if (!e.url) return !1;
							n.open((e.type || "get").toUpperCase(), e.url, !0),
								(e.headers && e.headers["Content-Type"]) ||
									n.setRequestHeader(
										"Content-Type",
										t[e.dataType || "json"] || t.text
									),
								s(e.headers, function (e, t) {
									n.setRequestHeader(t, e);
								}),
								e.responseType && (n.responseType = e.responseType),
								(n.onreadystatechange = function () {
									let t;
									if (4 === n.readyState) {
										if (200 === n.status) {
											if (
												"blob" !== e.responseType &&
												((t = n.responseText), "json" === e.dataType)
											)
												try {
													t = JSON.parse(t);
												} catch (e) {
													if (e instanceof Error) return i(n, e);
												}
											return e.success && e.success(t, n);
										}
										i(n, n.responseText);
									}
								}),
								e.data &&
									"string" != typeof e.data &&
									(e.data = JSON.stringify(e.data)),
								n.send(e.data);
						},
						getJSON: function (e, t) {
							l.ajax({
								url: e,
								success: t,
								dataType: "json",
								headers: { "Content-Type": "text/plain" },
							});
						},
						post: function (e, t, l) {
							let a = i(
								"form",
								r(
									{ method: "post", action: e, enctype: "multipart/form-data" },
									l
								),
								{ display: "none" },
								n.body
							);
							s(t, function (e, t) {
								i("input", { type: "hidden", name: t, value: e }, void 0, a);
							}),
								a.submit(),
								o(a);
						},
					};
				return l;
			}
		),
		n(
			t,
			"Extensions/Exporting/Exporting.js",
			[
				t["Core/Renderer/HTML/AST.js"],
				t["Core/Chart/Chart.js"],
				t["Core/Chart/ChartNavigationComposition.js"],
				t["Core/Defaults.js"],
				t["Extensions/Exporting/ExportingDefaults.js"],
				t["Extensions/Exporting/ExportingSymbols.js"],
				t["Extensions/Exporting/Fullscreen.js"],
				t["Core/Globals.js"],
				t["Core/HttpUtilities.js"],
				t["Core/Utilities.js"],
			],
			function (e, t, n, i, o, r, s, l, a, c) {
				var u;
				let { defaultOptions: p, setOptions: h } = i,
					{ doc: d, SVG_NS: g, win: f } = l,
					{
						addEvent: m,
						css: x,
						createElement: y,
						discardElement: b,
						extend: v,
						find: w,
						fireEvent: E,
						isObject: C,
						merge: S,
						objectEach: T,
						pick: F,
						removeEvent: O,
						uniqueKey: M,
					} = c;
				return (
					(function (t) {
						let i;
						let u = [],
							k = [
								/-/,
								/^(clipPath|cssText|d|height|width)$/,
								/^font$/,
								/[lL]ogical(Width|Height)$/,
								/^parentRule$/,
								/^(cssRules|ownerRules)$/,
								/perspective/,
								/TapHighlightColor/,
								/^transition/,
								/^length$/,
								/^[0-9]+$/,
							],
							P = [
								"fill",
								"stroke",
								"strokeLinecap",
								"strokeLinejoin",
								"strokeWidth",
								"textAnchor",
								"x",
								"y",
							];
						t.inlineAllowlist = [];
						let N = ["clipPath", "defs", "desc"];
						function j(e) {
							let t, n;
							let i = this,
								o = i.renderer,
								r = S(i.options.navigation.buttonOptions, e),
								s = r.onclick,
								l = r.menuItems,
								a = r.symbolSize || 12;
							if (
								(i.btnCount || (i.btnCount = 0),
								i.exportDivElements ||
									((i.exportDivElements = []), (i.exportSVGElements = [])),
								!1 === r.enabled || !r.theme)
							)
								return;
							let c = r.theme;
							i.styledMode ||
								((c.fill = F(c.fill, "#ffffff")),
								(c.stroke = F(c.stroke, "none"))),
								s
									? (n = function (e) {
											e && e.stopPropagation(), s.call(i, e);
									  })
									: l &&
									  (n = function (e) {
											e && e.stopPropagation(),
												i.contextMenu(
													u.menuClassName,
													l,
													u.translateX || 0,
													u.translateY || 0,
													u.width || 0,
													u.height || 0,
													u
												),
												u.setState(2);
									  }),
								r.text && r.symbol
									? (c.paddingLeft = F(c.paddingLeft, 30))
									: r.text ||
									  v(c, { width: r.width, height: r.height, padding: 0 }),
								i.styledMode ||
									((c["stroke-linecap"] = "round"),
									(c.fill = F(c.fill, "#ffffff")),
									(c.stroke = F(c.stroke, "none")));
							let u = o
								.button(
									r.text,
									0,
									0,
									n,
									c,
									void 0,
									void 0,
									void 0,
									void 0,
									r.useHTML
								)
								.addClass(e.className)
								.attr({
									title: F(i.options.lang[r._titleKey || r.titleKey], ""),
								});
							(u.menuClassName =
								e.menuClassName || "highcharts-menu-" + i.btnCount++),
								r.symbol &&
									((t = o
										.symbol(
											r.symbol,
											r.symbolX - a / 2,
											r.symbolY - a / 2,
											a,
											a,
											{ width: a, height: a }
										)
										.addClass("highcharts-button-symbol")
										.attr({ zIndex: 1 })
										.add(u)),
									i.styledMode ||
										t.attr({
											stroke: r.symbolStroke,
											fill: r.symbolFill,
											"stroke-width": r.symbolStrokeWidth || 1,
										})),
								u
									.add(i.exportingGroup)
									.align(
										v(r, { width: u.width, x: F(r.x, i.buttonOffset) }),
										!0,
										"spacingBox"
									),
								(i.buttonOffset +=
									((u.width || 0) + r.buttonSpacing) *
									("right" === r.align ? -1 : 1)),
								i.exportSVGElements.push(u, t);
						}
						function H() {
							if (!this.printReverseInfo) return;
							let {
								childNodes: e,
								origDisplay: t,
								resetParams: n,
							} = this.printReverseInfo;
							this.moveContainers(this.renderTo),
								[].forEach.call(e, function (e, n) {
									1 === e.nodeType && (e.style.display = t[n] || "");
								}),
								(this.isPrinting = !1),
								n && this.setSize.apply(this, n),
								delete this.printReverseInfo,
								(i = void 0),
								E(this, "afterPrint");
						}
						function D() {
							let e = d.body,
								t = this.options.exporting.printMaxWidth,
								n = {
									childNodes: e.childNodes,
									origDisplay: [],
									resetParams: void 0,
								};
							(this.isPrinting = !0),
								this.pointer.reset(null, 0),
								E(this, "beforePrint");
							let i = t && this.chartWidth > t;
							i &&
								((n.resetParams = [this.options.chart.width, void 0, !1]),
								this.setSize(t, void 0, !1)),
								[].forEach.call(n.childNodes, function (e, t) {
									1 === e.nodeType &&
										((n.origDisplay[t] = e.style.display),
										(e.style.display = "none"));
								}),
								this.moveContainers(e),
								(this.printReverseInfo = n);
						}
						function G(e) {
							e.renderExporting(),
								m(e, "redraw", e.renderExporting),
								m(e, "destroy", e.destroyExport);
						}
						function W(t, n, i, o, r, s, l) {
							let a = this,
								u = a.options.navigation,
								p = a.chartWidth,
								h = a.chartHeight,
								g = "cache-" + t,
								b = Math.max(r, s),
								w,
								S = a[g];
							S ||
								((a.exportContextMenu =
									a[g] =
									S =
										y(
											"div",
											{ className: t },
											{
												position: "absolute",
												zIndex: 1e3,
												padding: b + "px",
												pointerEvents: "auto",
												...a.renderer.style,
											},
											a.fixedDiv || a.container
										)),
								(w = y(
									"ul",
									{ className: "highcharts-menu" },
									a.styledMode
										? {}
										: { listStyle: "none", margin: 0, padding: 0 },
									S
								)),
								a.styledMode ||
									x(
										w,
										v(
											{
												MozBoxShadow: "3px 3px 10px #888",
												WebkitBoxShadow: "3px 3px 10px #888",
												boxShadow: "3px 3px 10px #888",
											},
											u.menuStyle
										)
									),
								(S.hideMenu = function () {
									x(S, { display: "none" }),
										l && l.setState(0),
										(a.openMenu = !1),
										x(a.renderTo, { overflow: "hidden" }),
										x(a.container, { overflow: "hidden" }),
										c.clearTimeout(S.hideTimer),
										E(a, "exportMenuHidden");
								}),
								a.exportEvents.push(
									m(S, "mouseleave", function () {
										S.hideTimer = f.setTimeout(S.hideMenu, 500);
									}),
									m(S, "mouseenter", function () {
										c.clearTimeout(S.hideTimer);
									}),
									m(d, "mouseup", function (e) {
										a.pointer.inClass(e.target, t) || S.hideMenu();
									}),
									m(S, "click", function () {
										a.openMenu && S.hideMenu();
									})
								),
								n.forEach(function (t) {
									if (
										("string" == typeof t &&
											(t = a.options.exporting.menuItemDefinitions[t]),
										C(t, !0))
									) {
										let n;
										t.separator
											? (n = y("hr", void 0, void 0, w))
											: ("viewData" === t.textKey &&
													a.isDataTableVisible &&
													(t.textKey = "hideData"),
											  (n = y(
													"li",
													{
														className: "highcharts-menu-item",
														onclick: function (e) {
															e && e.stopPropagation(),
																S.hideMenu(),
																t.onclick && t.onclick.apply(a, arguments);
														},
													},
													void 0,
													w
											  )),
											  e.setElementHTML(
													n,
													t.text || a.options.lang[t.textKey]
											  ),
											  a.styledMode ||
													((n.onmouseover = function () {
														x(this, u.menuItemHoverStyle);
													}),
													(n.onmouseout = function () {
														x(this, u.menuItemStyle);
													}),
													x(
														n,
														v({ cursor: "pointer" }, u.menuItemStyle || {})
													))),
											a.exportDivElements.push(n);
									}
								}),
								a.exportDivElements.push(w, S),
								(a.exportMenuWidth = S.offsetWidth),
								(a.exportMenuHeight = S.offsetHeight));
							let T = { display: "block" };
							i + a.exportMenuWidth > p
								? (T.right = p - i - r - b + "px")
								: (T.left = i - b + "px"),
								o + s + a.exportMenuHeight > h &&
								"top" !== l.alignOptions.verticalAlign
									? (T.bottom = h - o - b + "px")
									: (T.top = o + s - b + "px"),
								x(S, T),
								x(a.renderTo, { overflow: "" }),
								x(a.container, { overflow: "" }),
								(a.openMenu = !0),
								E(a, "exportMenuShown");
						}
						function I(e) {
							let t;
							let n = e ? e.target : this,
								i = n.exportSVGElements,
								o = n.exportDivElements,
								r = n.exportEvents;
							i &&
								(i.forEach((e, o) => {
									e &&
										((e.onclick = e.ontouchstart = null),
										n[(t = "cache-" + e.menuClassName)] && delete n[t],
										(i[o] = e.destroy()));
								}),
								(i.length = 0)),
								n.exportingGroup &&
									(n.exportingGroup.destroy(), delete n.exportingGroup),
								o &&
									(o.forEach(function (e, t) {
										e &&
											(c.clearTimeout(e.hideTimer),
											O(e, "mouseleave"),
											(o[t] =
												e.onmouseout =
												e.onmouseover =
												e.ontouchstart =
												e.onclick =
													null),
											b(e));
									}),
									(o.length = 0)),
								r &&
									(r.forEach(function (e) {
										e();
									}),
									(r.length = 0));
						}
						function R(e, t) {
							let n = this.getSVGForExport(e, t);
							(e = S(this.options.exporting, e)),
								a.post(
									e.url,
									{
										filename: e.filename
											? e.filename.replace(/\//g, "-")
											: this.getFilename(),
										type: e.type,
										width: e.width,
										scale: e.scale,
										svg: n,
									},
									e.formAttributes
								);
						}
						function q() {
							return (
								this.styledMode && this.inlineStyles(), this.container.innerHTML
							);
						}
						function L() {
							let e = this.userOptions.title && this.userOptions.title.text,
								t = this.options.exporting.filename;
							return t
								? t.replace(/\//g, "-")
								: ("string" == typeof e &&
										(t = e
											.toLowerCase()
											.replace(/<\/?[^>]+(>|$)/g, "")
											.replace(/[\s_]+/g, "-")
											.replace(/[^a-z0-9\-]/g, "")
											.replace(/^[\-]+/g, "")
											.replace(/[\-]+/g, "-")
											.substr(0, 24)
											.replace(/[\-]+$/g, "")),
								  (!t || t.length < 5) && (t = "chart"),
								  t);
						}
						function z(e) {
							let t,
								n,
								i = S(this.options, e);
							(i.plotOptions = S(
								this.userOptions.plotOptions,
								e && e.plotOptions
							)),
								(i.time = S(this.userOptions.time, e && e.time));
							let o = y(
									"div",
									null,
									{
										position: "absolute",
										top: "-9999em",
										width: this.chartWidth + "px",
										height: this.chartHeight + "px",
									},
									d.body
								),
								r = this.renderTo.style.width,
								s = this.renderTo.style.height,
								l =
									i.exporting.sourceWidth ||
									i.chart.width ||
									(/px$/.test(r) && parseInt(r, 10)) ||
									(i.isGantt ? 800 : 600),
								a =
									i.exporting.sourceHeight ||
									i.chart.height ||
									(/px$/.test(s) && parseInt(s, 10)) ||
									400;
							v(i.chart, {
								animation: !1,
								renderTo: o,
								forExport: !0,
								renderer: "SVGRenderer",
								width: l,
								height: a,
							}),
								(i.exporting.enabled = !1),
								delete i.data,
								(i.series = []),
								this.series.forEach(function (e) {
									(n = S(e.userOptions, {
										animation: !1,
										enableMouseTracking: !1,
										showCheckbox: !1,
										visible: e.visible,
									})).isInternal || i.series.push(n);
								});
							let c = {};
							this.axes.forEach(function (e) {
								e.userOptions.internalKey || (e.userOptions.internalKey = M()),
									e.options.isInternal ||
										(c[e.coll] || ((c[e.coll] = !0), (i[e.coll] = [])),
										i[e.coll].push(S(e.userOptions, { visible: e.visible })));
							});
							let u = new this.constructor(i, this.callback);
							return (
								e &&
									["xAxis", "yAxis", "series"].forEach(function (t) {
										let n = {};
										e[t] && ((n[t] = e[t]), u.update(n));
									}),
								this.axes.forEach(function (e) {
									let t = w(u.axes, function (t) {
											return (
												t.options.internalKey === e.userOptions.internalKey
											);
										}),
										n = e.getExtremes(),
										i = n.userMin,
										o = n.userMax;
									t &&
										((void 0 !== i && i !== t.min) ||
											(void 0 !== o && o !== t.max)) &&
										t.setExtremes(i, o, !0, !1);
								}),
								(t = u.getChartHTML()),
								E(this, "getSVG", { chartCopy: u }),
								(t = this.sanitizeSVG(t, i)),
								(i = null),
								u.destroy(),
								b(o),
								t
							);
						}
						function V(e, t) {
							let n = this.options.exporting;
							return this.getSVG(
								S({ chart: { borderRadius: 0 } }, n.chartOptions, t, {
									exporting: {
										sourceWidth: (e && e.sourceWidth) || n.sourceWidth,
										sourceHeight: (e && e.sourceHeight) || n.sourceHeight,
									},
								})
							);
						}
						function $() {
							let e;
							let n = t.inlineAllowlist,
								i = {},
								o = d.createElement("iframe");
							x(o, { width: "1px", height: "1px", visibility: "hidden" }),
								d.body.appendChild(o);
							let r = o.contentWindow && o.contentWindow.document;
							r && r.body.appendChild(r.createElementNS(g, "svg")),
								(function t(o) {
									let s, a, c, u, p, h;
									let d = {};
									if (r && 1 === o.nodeType && -1 === N.indexOf(o.nodeName)) {
										if (
											((s = f.getComputedStyle(o, null)),
											(a =
												"svg" === o.nodeName
													? {}
													: f.getComputedStyle(o.parentNode, null)),
											!i[o.nodeName])
										) {
											(e = r.getElementsByTagName("svg")[0]),
												(c = r.createElementNS(o.namespaceURI, o.nodeName)),
												e.appendChild(c);
											let t = f.getComputedStyle(c, null),
												n = {};
											for (let e in t)
												"string" != typeof t[e] ||
													/^[0-9]+$/.test(e) ||
													(n[e] = t[e]);
											(i[o.nodeName] = n),
												"text" === o.nodeName && delete i.text.fill,
												e.removeChild(c);
										}
										for (let e in s)
											(l.isFirefox ||
												l.isMS ||
												l.isSafari ||
												Object.hasOwnProperty.call(s, e)) &&
												(function (e, t) {
													if (((u = p = !1), n.length)) {
														for (h = n.length; h-- && !p; ) p = n[h].test(t);
														u = !p;
													}
													for (
														"transform" === t && "none" === e && (u = !0),
															h = k.length;
														h-- && !u;

													)
														u = k[h].test(t) || "function" == typeof e;
													!u &&
														(a[t] !== e || "svg" === o.nodeName) &&
														i[o.nodeName][t] !== e &&
														(P && -1 === P.indexOf(t)
															? (d[t] = e)
															: e &&
															  o.setAttribute(
																	t.replace(/([A-Z])/g, function (e, t) {
																		return "-" + t.toLowerCase();
																	}),
																	e
															  ));
												})(s[e], e);
										if (
											(x(o, d),
											"svg" === o.nodeName &&
												o.setAttribute("stroke-width", "1px"),
											"text" === o.nodeName)
										)
											return;
										[].forEach.call(o.children || o.childNodes, t);
									}
								})(this.container.querySelector("svg")),
								e.parentNode.removeChild(e),
								o.parentNode.removeChild(o);
						}
						function K(e) {
							(this.fixedDiv
								? [this.fixedDiv, this.scrollingContainer]
								: [this.container]
							).forEach(function (t) {
								e.appendChild(t);
							});
						}
						function A() {
							let e = this,
								t = (t, n, i) => {
									(e.isDirtyExporting = !0),
										S(!0, e.options[t], n),
										F(i, !0) && e.redraw();
								};
							(e.exporting = {
								update: function (e, n) {
									t("exporting", e, n);
								},
							}),
								n.compose(e).navigation.addUpdate((e, n) => {
									t("navigation", e, n);
								});
						}
						function U() {
							let e = this;
							e.isPrinting ||
								((i = e),
								l.isSafari || e.beforePrint(),
								setTimeout(() => {
									f.focus(),
										f.print(),
										l.isSafari ||
											setTimeout(() => {
												e.afterPrint();
											}, 1e3);
								}, 1));
						}
						function B() {
							let e = this,
								t = e.options.exporting,
								n = t.buttons,
								i = e.isDirtyExporting || !e.exportSVGElements;
							(e.buttonOffset = 0),
								e.isDirtyExporting && e.destroyExport(),
								i &&
									!1 !== t.enabled &&
									((e.exportEvents = []),
									(e.exportingGroup =
										e.exportingGroup ||
										e.renderer.g("exporting-group").attr({ zIndex: 3 }).add()),
									T(n, function (t) {
										e.addButton(t);
									}),
									(e.isDirtyExporting = !1));
						}
						function J(e, t) {
							let n = e.indexOf("</svg>") + 6,
								i = e.substr(n);
							return (
								(e = e.substr(0, n)),
								t &&
									t.exporting &&
									t.exporting.allowHTML &&
									i &&
									((i =
										'<foreignObject x="0" y="0" width="' +
										t.chart.width +
										'" height="' +
										t.chart.height +
										'"><body xmlns="http://www.w3.org/1999/xhtml">' +
										i.replace(/(<(?:img|br).*?(?=\>))>/g, "$1 />") +
										"</body></foreignObject>"),
									(e = e.replace("</svg>", i + "</svg>"))),
								(e = e
									.replace(/zIndex="[^"]+"/g, "")
									.replace(/symbolName="[^"]+"/g, "")
									.replace(/jQuery[0-9]+="[^"]+"/g, "")
									.replace(/url\(("|&quot;)(.*?)("|&quot;)\;?\)/g, "url($2)")
									.replace(/url\([^#]+#/g, "url(#")
									.replace(
										/<svg /,
										'<svg xmlns:xlink="http://www.w3.org/1999/xlink" '
									)
									.replace(/ (|NS[0-9]+\:)href=/g, " xlink:href=")
									.replace(/\n/, " ")
									.replace(
										/(fill|stroke)="rgba\(([ 0-9]+,[ 0-9]+,[ 0-9]+),([ 0-9\.]+)\)"/g,
										'$1="rgb($2)" $1-opacity="$3"'
									)
									.replace(/&nbsp;/g, "\xa0")
									.replace(/&shy;/g, "\xad"))
							);
						}
						t.compose = function (e, t) {
							if ((r.compose(t), s.compose(e), c.pushUnique(u, e))) {
								let t = e.prototype;
								(t.afterPrint = H),
									(t.exportChart = R),
									(t.inlineStyles = $),
									(t.print = U),
									(t.sanitizeSVG = J),
									(t.getChartHTML = q),
									(t.getSVG = z),
									(t.getSVGForExport = V),
									(t.getFilename = L),
									(t.moveContainers = K),
									(t.beforePrint = D),
									(t.contextMenu = W),
									(t.addButton = j),
									(t.destroyExport = I),
									(t.renderExporting = B),
									t.callbacks.push(G),
									m(e, "init", A),
									l.isSafari &&
										l.win.matchMedia("print").addListener(function (e) {
											i && (e.matches ? i.beforePrint() : i.afterPrint());
										});
							}
							c.pushUnique(u, h) &&
								((p.exporting = S(o.exporting, p.exporting)),
								(p.lang = S(o.lang, p.lang)),
								(p.navigation = S(o.navigation, p.navigation)));
						};
					})(u || (u = {})),
					u
				);
			}
		),
		n(
			t,
			"masters/modules/exporting.src.js",
			[
				t["Core/Globals.js"],
				t["Extensions/Exporting/Exporting.js"],
				t["Core/HttpUtilities.js"],
			],
			function (e, t, n) {
				(e.HttpUtilities = n),
					(e.ajax = n.ajax),
					(e.getJSON = n.getJSON),
					(e.post = n.post),
					t.compose(e.Chart, e.Renderer);
			}
		);
}); //# sourceMappingURL=exporting.js.map
