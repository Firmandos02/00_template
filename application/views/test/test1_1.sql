
UPDATE `transct_sheet`
SET
    `point` = 'BEARING MOTOR',
    `metode` = 'CEK VIBRASI',
    `standard` = '< 4,5 mm/s',
    `std_stat` = 1,
    `std_min` = 0,
    `std_max` = 4.5,
    `operation` = '>=',
`param` = 'mm/s',
`i_aktual` = 'a_mphw1',
`i_judge` = 'j_mphw1',
`i_tindakan` = 't_mphw1',
`i_hasil` = 'h_mphw1',
`i_hasil_val` = 'hv_mphw1'
WHERE `id` = 831;

UPDATE `transct_sheet`
SET
    `point` = 'BEARING POMPA',
    `metode` = 'CEK VIBRASI',
    `standard` = '< 4,5 mm/s',
    `std_stat` = 1,
    `std_min` = 0,
    `std_max` = 4.5,
    `operation` = '>=',
`param` = 'mm/s',
`i_aktual` = 'a_mphw2',
`i_judge` = 'j_mphw2',
`i_tindakan` = 't_mphw2',
`i_hasil` = 'h_mphw2',
`i_hasil_val` = 'hv_mphw2'
WHERE `id` = 832;

UPDATE `transct_sheet`
SET
    `point` = 'PRESSURE POMPA',
    `metode` = 'CEK PRESSURE GAUGE',
    `standard` = '0,8 -1,2 Bar',
    `std_stat` = 1,
    `std_min` = 0.8,
    `std_max` = 1.2,
    `operation` = '>',
    `param` = 'Bar',
`i_aktual` = 'a_mphw3',
`i_judge` = 'j_mphw3',
`i_tindakan` = 't_mphw3',
`i_hasil` = 'h_mphw3',
`i_hasil_val` = 'hv_mphw3'
WHERE `id` = 833;
