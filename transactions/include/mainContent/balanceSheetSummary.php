<?php
$approved = "Approved";
$pending = "Pending";

// office account numbers
$acc_number_assets = "AS0000000";
$acc_number_contigent_assets = "CA0000000";
$acc_number_contigent_liability = "CL0000000";
$acc_number_expense = "EX0000000";
$acc_number_income = "IN0000000";
$acc_number_liability = "LI0000000";

// assets
$assets_debit = 0;
$assets_credit = 0;
$assets_net = 0;

// contigent_assets
$contigent_assets_debit = 0;
$contigent_assets_credit = 0;
$contigent_assets_net = 0;

// contigent_liability
$contigent_liability_debit = 0;
$contigent_liability_credit = 0;
$contigent_liability_net = 0;

// expense
$expense_debit = 0;
$expense_credit = 0;
$expense_net = 0;

// income
$income_debit = 0;
$income_credit = 0;
$income_net = 0;

// liability
$liability_debit = 0;
$liability_credit = 0;
$liability_net = 0;










/*
// Begin of getting data for all account numbers
$tbl6 = "ckc_2021_balance_sheet_assets_AS1000000";
$tbl7 = "ckc_2021_balance_sheet_assets_AS1100000";
$tbl8 = "ckc_2021_balance_sheet_assets_AS1110000";
$tbl9 = "ckc_2021_balance_sheet_assets_AS1110010";
$tbl10 = "ckc_2021_balance_sheet_assets_AS1112000";
$tbl11 = "ckc_2021_balance_sheet_assets_AS1112010";
$tbl12 = "ckc_2021_balance_sheet_assets_AS1400000";
$tbl13 = "ckc_2021_balance_sheet_assets_AS1410000";
$tbl14 = "ckc_2021_balance_sheet_assets_AS1410040";
$tbl15 = "ckc_2021_balance_sheet_assets_AS1410100";
$tbl16 = "ckc_2021_balance_sheet_assets_AS1410110";
$tbl17 = "ckc_2021_balance_sheet_assets_AS1550030";
$tbl18 = "ckc_2021_balance_sheet_assets_AS1600000";
$tbl19 = "ckc_2021_balance_sheet_assets_AS1610000";
$tbl20 = "ckc_2021_balance_sheet_assets_AS1620000";
$tbl21 = "ckc_2021_balance_sheet_assets_AS1620100";
$tbl22 = "ckc_2021_balance_sheet_assets_AS1700000";
$tbl23 = "ckc_2021_balance_sheet_assets_AS1710000";
$tbl24 = "ckc_2021_balance_sheet_assets_AS1710010";
$tbl25 = "ckc_2021_balance_sheet_assets_AS1720500";
$tbl26 = "ckc_2021_balance_sheet_assets_AS1723020";
$tbl27 = "ckc_2021_balance_sheet_assets_AS1800000";
$tbl28 = "ckc_2021_balance_sheet_assets_AS1820010";
$tbl29 = "ckc_2021_balance_sheet_assets_AS1830000";
$tbl30 = "ckc_2021_balance_sheet_assets_AS1830050";
$tbl31 = "ckc_2021_balance_sheet_assets_AS1841000";
$tbl32 = "ckc_2021_balance_sheet_assets_AS1841010";
$tbl33 = "ckc_2021_balance_sheet_assets_AS1841015";
$tbl34 = "ckc_2021_balance_sheet_assets_AS1850000";
$tbl35 = "ckc_2021_balance_sheet_assets_AS1851000";
$tbl36 = "ckc_2021_balance_sheet_assets_AS1851100";
$tbl37 = "ckc_2021_balance_sheet_assets_AS1852000";
$tbl38 = "ckc_2021_balance_sheet_assets_AS1852100";
$tbl39 = "ckc_2021_balance_sheet_assets_AS1870000";
$tbl40 = "ckc_2021_balance_sheet_assets_AS1871000";
$tbl41 = "ckc_2021_balance_sheet_assets_AS1872000";
$tbl42 = "ckc_2021_balance_sheet_assets_AS1873000";
$tbl43 = "ckc_2021_balance_sheet_assets_AS1874000";
$tbl44 = "ckc_2021_balance_sheet_assets_AS1874500";
$tbl45 = "ckc_2021_balance_sheet_assets_AS1875000";
$tbl46 = "ckc_2021_balance_sheet_assets_AS1875005";
$tbl47 = "ckc_2021_balance_sheet_assets_AS1875010";
$tbl48 = "ckc_2021_balance_sheet_assets_AS1875020";
$tbl49 = "ckc_2021_balance_sheet_assets_AS1875030";
$tbl50 = "ckc_2021_balance_sheet_assets_AS1875040";
$tbl51 = "ckc_2021_balance_sheet_assets_AS1875050";
$tbl52 = "ckc_2021_balance_sheet_assets_AS1900000";
$tbl53 = "ckc_2021_balance_sheet_assets_AS1910000";
$tbl54 = "ckc_2021_balance_sheet_assets_AS1911000";
$tbl55 = "ckc_2021_balance_sheet_assets_AS1911100";
$tbl56 = "ckc_2021_balance_sheet_assets_AS1912000";
$tbl57 = "ckc_2021_balance_sheet_assets_AS1920000";
$tbl58 = "ckc_2021_balance_sheet_assets_AS1921000";
$tbl59 = "ckc_2021_balance_sheet_assets_AS1930000";
$tbl60 = "ckc_2021_balance_sheet_assets_AS1931000";
$tbl61 = "ckc_2021_balance_sheet_assets_AS1940000";
$tbl62 = "ckc_2021_balance_sheet_assets_AS1941000";
$tbl63 = "ckc_2021_balance_sheet_assets_AS1943000";
$tbl64 = "ckc_2021_balance_sheet_assets_AS1950000";
$tbl65 = "ckc_2021_balance_sheet_assets_AS1951000";
$tbl66 = "ckc_2021_balance_sheet_liability_LI2000000";
$tbl67 = "ckc_2021_balance_sheet_liability_LI2100000";
$tbl68 = "ckc_2021_balance_sheet_liability_LI2110000";
$tbl69 = "ckc_2021_balance_sheet_liability_LI2111000";
$tbl70 = "ckc_2021_balance_sheet_liability_LI2112000";
$tbl71 = "ckc_2021_balance_sheet_liability_LI2113000";
$tbl72 = "ckc_2021_balance_sheet_liability_LI2114000";
$tbl73 = "ckc_2021_balance_sheet_liability_LI2114100";
$tbl74 = "ckc_2021_balance_sheet_liability_LI2114200";
$tbl75 = "ckc_2021_balance_sheet_liability_LI2114300";
$tbl76 = "ckc_2021_balance_sheet_liability_LI2120000";
$tbl77 = "ckc_2021_balance_sheet_liability_LI2121000";
$tbl78 = "ckc_2021_balance_sheet_liability_LI2121132";
$tbl79 = "ckc_2021_balance_sheet_liability_LI2129210";
$tbl80 = "ckc_2021_balance_sheet_liability_LI2130000";
$tbl81 = "ckc_2021_balance_sheet_liability_LI2131000";
$tbl82 = "ckc_2021_balance_sheet_liability_LI2132000";
$tbl83 = "ckc_2021_balance_sheet_liability_LI2133000";
$tbl84 = "ckc_2021_balance_sheet_liability_LI2134000";
$tbl85 = "ckc_2021_balance_sheet_liability_LI2134100";
$tbl86 = "ckc_2021_balance_sheet_liability_LI2134200";
$tbl87 = "ckc_2021_balance_sheet_liability_LI2134300";
$tbl88 = "ckc_2021_balance_sheet_liability_LI2140000";
$tbl89 = "ckc_2021_balance_sheet_liability_LI2141000";
$tbl90 = "ckc_2021_balance_sheet_liability_LI2142000";
$tbl91 = "ckc_2021_balance_sheet_liability_LI2143000";
$tbl92 = "ckc_2021_balance_sheet_liability_LI2144000";
$tbl93 = "ckc_2021_balance_sheet_liability_LI2144100";
$tbl94 = "ckc_2021_balance_sheet_liability_LI2300000";
$tbl95 = "ckc_2021_balance_sheet_liability_LI2315000";
$tbl96 = "ckc_2021_balance_sheet_liability_LI2315001";
$tbl97 = "ckc_2021_balance_sheet_liability_LI2315012";
$tbl98 = "ckc_2021_balance_sheet_liability_LI2315020";
$tbl99 = "ckc_2021_balance_sheet_liability_LI2320000";
$tbl100 = "ckc_2021_balance_sheet_liability_LI2321000";
$tbl101 = "ckc_2021_balance_sheet_liability_LI2330000";
$tbl102 = "ckc_2021_balance_sheet_liability_LI2331000";
$tbl103 = "ckc_2021_balance_sheet_liability_LI2332000";
$tbl104 = "ckc_2021_balance_sheet_liability_LI2340000";
$tbl105 = "ckc_2021_balance_sheet_liability_LI2345000";
$tbl106 = "ckc_2021_balance_sheet_liability_LI2350000";
$tbl107 = "ckc_2021_balance_sheet_liability_LI2375000";
$tbl108 = "ckc_2021_balance_sheet_liability_LI2375100";
$tbl109 = "ckc_2021_balance_sheet_liability_LI2376100";
$tbl110 = "ckc_2021_balance_sheet_liability_LI2376850";
$tbl111 = "ckc_2021_balance_sheet_liability_LI2376900";
$tbl112 = "ckc_2021_balance_sheet_liability_LI2380000";
$tbl113 = "ckc_2021_balance_sheet_liability_LI2381000";
$tbl114 = "ckc_2021_balance_sheet_liability_LI2381100";
$tbl115 = "ckc_2021_balance_sheet_liability_LI2381200";
$tbl116 = "ckc_2021_balance_sheet_liability_LI2381250";
$tbl117 = "ckc_2021_balance_sheet_liability_LI2390000";
$tbl118 = "ckc_2021_balance_sheet_liability_LI2400000";
$tbl119 = "ckc_2021_balance_sheet_liability_LI2405000";
$tbl120 = "ckc_2021_balance_sheet_liability_LI2405001";
$tbl121 = "ckc_2021_balance_sheet_liability_LI2405010";
$tbl122 = "ckc_2021_balance_sheet_liability_LI2405012";
$tbl123 = "ckc_2021_balance_sheet_liability_LI2407000";
$tbl124 = "ckc_2021_balance_sheet_liability_LI2409100";
$tbl125 = "ckc_2021_balance_sheet_liability_LI2409101";
$tbl126 = "ckc_2021_balance_sheet_liability_LI2409102";
$tbl127 = "ckc_2021_balance_sheet_liability_LI2409104";
$tbl128 = "ckc_2021_balance_sheet_liability_LI2409500";
$tbl129 = "ckc_2021_balance_sheet_liability_LI2409510";
$tbl130 = "ckc_2021_balance_sheet_liability_LI2409515";
$tbl131 = "ckc_2021_balance_sheet_liability_LI2409520";
$tbl132 = "ckc_2021_balance_sheet_liability_LI2409600";
$tbl133 = "ckc_2021_balance_sheet_liability_LI2409615";
$tbl134 = "ckc_2021_balance_sheet_liability_LI2409625";
$tbl135 = "ckc_2021_balance_sheet_liability_LI2409630";
$tbl136 = "ckc_2021_balance_sheet_liability_LI2410000";
$tbl137 = "ckc_2021_balance_sheet_liability_LI2411000";
$tbl138 = "ckc_2021_balance_sheet_liability_LI2412000";
$tbl139 = "ckc_2021_balance_sheet_liability_LI2412100";
$tbl140 = "ckc_2021_balance_sheet_liability_LI2420000";
$tbl141 = "ckc_2021_balance_sheet_liability_LI2421000";
$tbl142 = "ckc_2021_balance_sheet_liability_LI2422000";
$tbl143 = "ckc_2021_balance_sheet_liability_LI2423000";
$tbl144 = "ckc_2021_balance_sheet_liability_LI2423200";
$tbl145 = "ckc_2021_balance_sheet_liability_LI2423205";
$tbl146 = "ckc_2021_balance_sheet_liability_LI2423220";
$tbl147 = "ckc_2021_balance_sheet_liability_LI2424000";
$tbl148 = "ckc_2021_balance_sheet_liability_LI2425000";
$tbl149 = "ckc_2021_balance_sheet_liability_LI2426000";
$tbl150 = "ckc_2021_balance_sheet_liability_LI2430000";
$tbl151 = "ckc_2021_balance_sheet_liability_LI2430510";
$tbl152 = "ckc_2021_balance_sheet_liability_LI2440000";
$tbl153 = "ckc_2021_balance_sheet_liability_LI2450000";
$tbl154 = "ckc_2021_balance_sheet_liability_LI2455370";
$tbl155 = "ckc_2021_balance_sheet_liability_LI2455380";
$tbl156 = "ckc_2021_balance_sheet_liability_LI2460000";
$tbl157 = "ckc_2021_balance_sheet_liability_LI2461000";
$tbl158 = "ckc_2021_balance_sheet_liability_LI2480000";
$tbl159 = "ckc_2021_balance_sheet_liability_LI2481000";
$tbl160 = "ckc_2021_balance_sheet_liability_LI2487100";
$tbl161 = "ckc_2021_balance_sheet_liability_LI2490000";
$tbl162 = "ckc_2021_balance_sheet_liability_LI2491000";
$tbl163 = "ckc_2021_balance_sheet_liability_LI2491050";
$tbl164 = "ckc_2021_balance_sheet_liability_LI2600000";
$tbl165 = "ckc_2021_balance_sheet_liability_LI2610000";
$tbl166 = "ckc_2021_balance_sheet_liability_LI2620000";
$tbl167 = "ckc_2021_balance_sheet_liability_LI2621000";
$tbl168 = "ckc_2021_balance_sheet_liability_LI2622000";
$tbl169 = "ckc_2021_balance_sheet_liability_LI2624000";
$tbl170 = "ckc_2021_balance_sheet_liability_LI2625000";
$tbl171 = "ckc_2021_balance_sheet_liability_LI2630000";
$tbl172 = "ckc_2021_balance_sheet_liability_LI2631000";
$tbl173 = "ckc_2021_balance_sheet_liability_LI2631100";
$tbl174 = "ckc_2021_balance_sheet_liability_LI2631200";
$tbl175 = "ckc_2021_balance_sheet_liability_LI2631300";
$tbl176 = "ckc_2021_balance_sheet_liability_LI2640000";
$tbl177 = "ckc_2021_balance_sheet_liability_LI2650000";
$tbl178 = "ckc_2021_balance_sheet_liability_LI2651000";
$tbl179 = "ckc_2021_balance_sheet_liability_LI2665000";
$tbl180 = "ckc_2021_balance_sheet_liability_LI2670000";
$tbl181 = "ckc_2021_balance_sheet_liability_LI2671000";
$tbl182 = "ckc_2021_balance_sheet_liability_LI2672000";
$tbl183 = "ckc_2021_balance_sheet_liability_LI2673000";
$tbl184 = "ckc_2021_balance_sheet_liability_LI2674000";
$tbl185 = "ckc_2021_balance_sheet_liability_LI2674050";
$tbl186 = "ckc_2021_balance_sheet_liability_LI2675000";
$tbl187 = "ckc_2021_balance_sheet_liability_LI2676000";
$tbl188 = "ckc_2021_balance_sheet_liability_LI2680000";
$tbl189 = "ckc_2021_balance_sheet_liability_LI2681000";
$tbl190 = "ckc_2021_balance_sheet_liability_LI2682000";
$tbl191 = "ckc_2021_balance_sheet_liability_LI2682100";
$tbl192 = "ckc_2021_balance_sheet_liability_LI2683000";
$tbl193 = "ckc_2021_balance_sheet_liability_LI2684000";
$tbl194 = "ckc_2021_balance_sheet_liability_LI2685000";
$tbl195 = "ckc_2021_balance_sheet_liability_LI2800000";
$tbl196 = "ckc_2021_balance_sheet_liability_LI2810000";
$tbl197 = "ckc_2021_balance_sheet_liability_LI2820000";
$tbl198 = "ckc_2021_balance_sheet_liability_LI2821000";
$tbl199 = "ckc_2021_balance_sheet_liability_LI2822000";
$tbl200 = "ckc_2021_balance_sheet_liability_LI2823000";
$tbl201 = "ckc_2021_balance_sheet_liability_LI2824000";
$tbl202 = "ckc_2021_balance_sheet_liability_LI2825000";
$tbl203 = "ckc_2021_balance_sheet_income_IN3000000";
$tbl204 = "ckc_2021_balance_sheet_income_IN3100000";
$tbl205 = "ckc_2021_balance_sheet_income_IN3101000";
$tbl206 = "ckc_2021_balance_sheet_income_IN3101010";
$tbl207 = "ckc_2021_balance_sheet_income_IN3101020";
$tbl208 = "ckc_2021_balance_sheet_income_IN3101170";
$tbl209 = "ckc_2021_balance_sheet_income_IN3101175";
$tbl210 = "ckc_2021_balance_sheet_income_IN3101185";
$tbl211 = "ckc_2021_balance_sheet_income_IN3101190";
$tbl212 = "ckc_2021_balance_sheet_income_IN3105070";
$tbl213 = "ckc_2021_balance_sheet_income_IN3200000";
$tbl214 = "ckc_2021_balance_sheet_income_IN3201000";
$tbl215 = "ckc_2021_balance_sheet_income_IN3201010";
$tbl216 = "ckc_2021_balance_sheet_income_IN3201020";
$tbl217 = "ckc_2021_balance_sheet_income_IN3201025";
$tbl218 = "ckc_2021_balance_sheet_income_IN3201027";
$tbl219 = "ckc_2021_balance_sheet_income_IN3201060";
$tbl220 = "ckc_2021_balance_sheet_income_IN3201061";
$tbl221 = "ckc_2021_balance_sheet_income_IN3201062";
$tbl222 = "ckc_2021_balance_sheet_income_IN3201063";
$tbl223 = "ckc_2021_balance_sheet_income_IN3201180";
$tbl224 = "ckc_2021_balance_sheet_income_IN3202020";
$tbl225 = "ckc_2021_balance_sheet_income_IN3202021";
$tbl226 = "ckc_2021_balance_sheet_income_IN3205100";
$tbl227 = "ckc_2021_balance_sheet_income_IN3205110";
$tbl228 = "ckc_2021_balance_sheet_income_IN3205120";
$tbl229 = "ckc_2021_balance_sheet_income_IN3205130";
$tbl230 = "ckc_2021_balance_sheet_income_IN3205140";
$tbl231 = "ckc_2021_balance_sheet_income_IN3205200";
$tbl232 = "ckc_2021_balance_sheet_income_IN3205300";
$tbl233 = "ckc_2021_balance_sheet_income_IN3206000";
$tbl234 = "ckc_2021_balance_sheet_income_IN3206010";
$tbl235 = "ckc_2021_balance_sheet_income_IN3207000";
$tbl236 = "ckc_2021_balance_sheet_income_IN3207010";
$tbl237 = "ckc_2021_balance_sheet_income_IN3207020";
$tbl238 = "ckc_2021_balance_sheet_income_IN3207030";
$tbl239 = "ckc_2021_balance_sheet_income_IN3207040";
$tbl240 = "ckc_2021_balance_sheet_income_IN3207050";
$tbl241 = "ckc_2021_balance_sheet_income_IN3207051";
$tbl242 = "ckc_2021_balance_sheet_income_IN3207052";
$tbl243 = "ckc_2021_balance_sheet_income_IN3207054";
$tbl244 = "ckc_2021_balance_sheet_expense_EX4000000";
$tbl245 = "ckc_2021_balance_sheet_expense_EX4100000";
$tbl246 = "ckc_2021_balance_sheet_expense_EX4101870";
$tbl247 = "ckc_2021_balance_sheet_expense_EX4110000";
$tbl248 = "ckc_2021_balance_sheet_expense_EX4110010";
$tbl249 = "ckc_2021_balance_sheet_expense_EX4110020";
$tbl250 = "ckc_2021_balance_sheet_expense_EX4110030";
$tbl251 = "ckc_2021_balance_sheet_expense_EX4110040";
$tbl252 = "ckc_2021_balance_sheet_expense_EX4110050";
$tbl253 = "ckc_2021_balance_sheet_expense_EX4200000";
$tbl254 = "ckc_2021_balance_sheet_expense_EX4210000";
$tbl255 = "ckc_2021_balance_sheet_expense_EX4214000";
$tbl256 = "ckc_2021_balance_sheet_expense_EX4215000";
$tbl257 = "ckc_2021_balance_sheet_expense_EX4215100";
$tbl258 = "ckc_2021_balance_sheet_expense_EX4216000";
$tbl259 = "ckc_2021_balance_sheet_expense_EX4220000";
$tbl260 = "ckc_2021_balance_sheet_expense_EX4222300";
$tbl261 = "ckc_2021_balance_sheet_expense_EX4222400";
$tbl262 = "ckc_2021_balance_sheet_expense_EX4222500";
$tbl263 = "ckc_2021_balance_sheet_expense_EX4222600";
$tbl264 = "ckc_2021_balance_sheet_expense_EX4230000";
$tbl265 = "ckc_2021_balance_sheet_expense_EX4230070";
$tbl266 = "ckc_2021_balance_sheet_expense_EX4230080";
$tbl267 = "ckc_2021_balance_sheet_expense_EX4240000";
$tbl268 = "ckc_2021_balance_sheet_expense_EX4241000";
$tbl269 = "ckc_2021_balance_sheet_expense_EX4290000";
$tbl270 = "ckc_2021_balance_sheet_expense_EX4291000";
$tbl271 = "ckc_2021_balance_sheet_expense_EX4300000";
$tbl272 = "ckc_2021_balance_sheet_expense_EX4310000";
$tbl273 = "ckc_2021_balance_sheet_expense_EX4310010";
$tbl274 = "ckc_2021_balance_sheet_expense_EX4310020";
$tbl275 = "ckc_2021_balance_sheet_expense_EX4310040";
$tbl276 = "ckc_2021_balance_sheet_expense_EX4310050";
$tbl277 = "ckc_2021_balance_sheet_expense_EX4310060";
$tbl278 = "ckc_2021_balance_sheet_expense_EX4310070";
$tbl279 = "ckc_2021_balance_sheet_expense_EX4310080";
$tbl280 = "ckc_2021_balance_sheet_expense_EX4310100";
$tbl281 = "ckc_2021_balance_sheet_expense_EX4310110";
$tbl282 = "ckc_2021_balance_sheet_expense_EX4310120";
$tbl283 = "ckc_2021_balance_sheet_expense_EX4310130";
$tbl284 = "ckc_2021_balance_sheet_expense_EX4310140";
$tbl285 = "ckc_2021_balance_sheet_expense_EX4310150";
$tbl286 = "ckc_2021_balance_sheet_expense_EX4310160";
$tbl287 = "ckc_2021_balance_sheet_expense_EX4310170";
$tbl288 = "ckc_2021_balance_sheet_expense_EX4310180";
$tbl289 = "ckc_2021_balance_sheet_expense_EX4310190";
$tbl290 = "ckc_2021_balance_sheet_expense_EX4310200";
$tbl291 = "ckc_2021_balance_sheet_expense_EX4310210";
$tbl292 = "ckc_2021_balance_sheet_expense_EX4310220";
$tbl293 = "ckc_2021_balance_sheet_expense_EX4310230";
$tbl294 = "ckc_2021_balance_sheet_expense_EX4310240";
$tbl295 = "ckc_2021_balance_sheet_expense_EX4310250";
$tbl296 = "ckc_2021_balance_sheet_expense_EX4320000";
$tbl297 = "ckc_2021_balance_sheet_expense_EX4321000";
$tbl298 = "ckc_2021_balance_sheet_expense_EX4322000";
$tbl299 = "ckc_2021_balance_sheet_expense_EX4330000";
$tbl300 = "ckc_2021_balance_sheet_expense_EX4331000";
$tbl301 = "ckc_2021_balance_sheet_expense_EX4331010";
$tbl302 = "ckc_2021_balance_sheet_expense_EX4331070";
$tbl303 = "ckc_2021_balance_sheet_expense_EX4331090";
$tbl304 = "ckc_2021_balance_sheet_expense_EX4331100";
$tbl305 = "ckc_2021_balance_sheet_expense_EX4331140";
$tbl306 = "ckc_2021_balance_sheet_expense_EX4331150";
$tbl307 = "ckc_2021_balance_sheet_expense_EX4331160";
$tbl308 = "ckc_2021_balance_sheet_expense_EX4331161";
$tbl309 = "ckc_2021_balance_sheet_expense_EX4332000";
$tbl310 = "ckc_2021_balance_sheet_expense_EX4332090";
$tbl311 = "ckc_2021_balance_sheet_expense_EX4332100";
$tbl312 = "ckc_2021_balance_sheet_expense_EX4340000";
$tbl313 = "ckc_2021_balance_sheet_expense_EX4341000";
$tbl314 = "ckc_2021_balance_sheet_expense_EX4347000";
$tbl315 = "ckc_2021_balance_sheet_expense_EX4350000";
$tbl316 = "ckc_2021_balance_sheet_expense_EX4351000";
$tbl317 = "ckc_2021_balance_sheet_expense_EX4370000";
$tbl318 = "ckc_2021_balance_sheet_expense_EX4371000";
$tbl319 = "ckc_2021_balance_sheet_expense_EX4372000";
$tbl320 = "ckc_2021_balance_sheet_expense_EX4374000";
$tbl321 = "ckc_2021_balance_sheet_expense_EX4380000";
$tbl322 = "ckc_2021_balance_sheet_expense_EX4381000";
$tbl323 = "ckc_2021_balance_sheet_expense_EX4390000";
$tbl324 = "ckc_2021_balance_sheet_expense_EX4391000";
$tbl325 = "ckc_2021_balance_sheet_expense_EX4392000";
$tbl326 = "ckc_2021_balance_sheet_expense_EX4393000";
$tbl327 = "ckc_2021_balance_sheet_expense_EX4395000";
$tbl328 = "ckc_2021_balance_sheet_expense_EX4400000";
$tbl329 = "ckc_2021_balance_sheet_expense_EX4401000";
$tbl330 = "ckc_2021_balance_sheet_expense_EX4402000";
$tbl331 = "ckc_2021_balance_sheet_expense_EX4410000";
$tbl332 = "ckc_2021_balance_sheet_expense_EX4410400";
$tbl333 = "ckc_2021_balance_sheet_expense_EX4410500";
$tbl334 = "ckc_2021_balance_sheet_expense_EX4410600";
$tbl335 = "ckc_2021_balance_sheet_expense_EX4410700";
$tbl336 = "ckc_2021_balance_sheet_expense_EX4410900";
$tbl337 = "ckc_2021_balance_sheet_expense_EX4420000";
$tbl338 = "ckc_2021_balance_sheet_expense_EX4420100";
$tbl339 = "ckc_2021_balance_sheet_expense_EX4420200";
$tbl340 = "ckc_2021_balance_sheet_expense_EX4420300";
$tbl341 = "ckc_2021_balance_sheet_expense_EX4420400";
$tbl342 = "ckc_2021_balance_sheet_expense_EX4420600";
$tbl343 = "ckc_2021_balance_sheet_expense_EX4430000";
$tbl344 = "ckc_2021_balance_sheet_expense_EX4430100";
$tbl345 = "ckc_2021_balance_sheet_expense_EX4430200";
$tbl346 = "ckc_2021_balance_sheet_expense_EX4440000";
$tbl347 = "ckc_2021_balance_sheet_expense_EX4440100";
$tbl348 = "ckc_2021_balance_sheet_expense_EX4440500";
$tbl349 = "ckc_2021_balance_sheet_expense_EX4450000";
$tbl350 = "ckc_2021_balance_sheet_expense_EX4450100";
$tbl351 = "ckc_2021_balance_sheet_expense_EX4450200";
$tbl352 = "ckc_2021_balance_sheet_expense_EX4450300";
$tbl353 = "ckc_2021_balance_sheet_expense_EX4460000";
$tbl354 = "ckc_2021_balance_sheet_expense_EX4460100";
$tbl355 = "ckc_2021_balance_sheet_expense_EX4460200";
$tbl356 = "ckc_2021_balance_sheet_expense_EX4460300";
$tbl357 = "ckc_2021_balance_sheet_expense_EX4460400";
$tbl358 = "ckc_2021_balance_sheet_expense_EX4460500";
$tbl359 = "ckc_2021_balance_sheet_expense_EX4460600";
$tbl360 = "ckc_2021_balance_sheet_expense_EX4460610";
$tbl361 = "ckc_2021_balance_sheet_expense_EX4460620";
$tbl362 = "ckc_2021_balance_sheet_expense_EX4460630";
$tbl363 = "ckc_2021_balance_sheet_expense_EX4460640";
$tbl364 = "ckc_2021_balance_sheet_expense_EX4470000";
$tbl365 = "ckc_2021_balance_sheet_expense_EX4470600";
$tbl366 = "ckc_2021_balance_sheet_expense_EX4475000";
$tbl367 = "ckc_2021_balance_sheet_expense_EX4475100";
$tbl368 = "ckc_2021_balance_sheet_expense_EX4480000";
$tbl369 = "ckc_2021_balance_sheet_expense_EX4480400";
$tbl370 = "ckc_2021_balance_sheet_expense_EX4490000";
$tbl371 = "ckc_2021_balance_sheet_expense_EX4490100";
$tbl372 = "ckc_2021_balance_sheet_expense_EX4490200";
$tbl373 = "ckc_2021_balance_sheet_expense_EX4490300";
$tbl374 = "ckc_2021_balance_sheet_expense_EX4490400";
$tbl375 = "ckc_2021_balance_sheet_expense_EX4490450";
$tbl376 = "ckc_2021_balance_sheet_expense_EX4490500";
$tbl377 = "ckc_2021_balance_sheet_expense_EX4490600";
$tbl378 = "ckc_2021_balance_sheet_expense_EX4500000";
$tbl379 = "ckc_2021_balance_sheet_expense_EX4500100";
$tbl380 = "ckc_2021_balance_sheet_expense_EX4500200";
$tbl381 = "ckc_2021_balance_sheet_expense_EX4500300";
$tbl382 = "ckc_2021_balance_sheet_expense_EX4600000";
$tbl383 = "ckc_2021_balance_sheet_expense_EX4610000";
$tbl384 = "ckc_2021_balance_sheet_expense_EX4700000";
$tbl385 = "ckc_2021_balance_sheet_expense_EX4710000";
$tbl386 = "ckc_2021_balance_sheet_contingent_assets_CA5000000"; 
$tbl387 = "ckc_2021_balance_sheet_contingent_assets_CA5001000"; 
$tbl388 = "ckc_2021_balance_sheet_contingent_assets_CA5001050"; 
$tbl389 = "ckc_2021_balance_sheet_contingent_assets_CA5001060"; 
$tbl390 = "ckc_2021_balance_sheet_contingent_assets_CA5002000"; 
$tbl391 = "ckc_2021_balance_sheet_contingent_assets_CA5002010"; 
$tbl392 = "ckc_2021_balance_sheet_contingent_assets_CA5002020"; 
$tbl393 = "ckc_2021_balance_sheet_contingent_liability_CL6000000";
$tbl394 = "ckc_2021_balance_sheet_contingent_liability_CL6001000";
$tbl395 = "ckc_2021_balance_sheet_contingent_liability_CL6001010";
$tbl396 = "ckc_2021_balance_sheet_contingent_liability_CL6001020";
$tbl397 = "ckc_2021_balance_sheet_contingent_liability_CL6001030";
$tbl398 = "ckc_2021_balance_sheet_contingent_liability_CL6001040";

$tables = array($tbl6, $tbl7, $tbl8, $tbl9, $tbl10, $tbl11, $tbl12, $tbl13, $tbl14, $tbl15, $tbl16, $tbl17, $tbl18, $tbl19, $tbl20, $tbl21, $tbl22, $tbl23, $tbl24, $tbl25, $tbl26, $tbl27, $tbl28, $tbl29, $tbl30, $tbl31, $tbl32, $tbl33, $tbl34, $tbl35, $tbl36, $tbl37, $tbl38, $tbl39, $tbl40, $tbl41, $tbl42, $tbl43, $tbl44, $tbl45, $tbl46, $tbl47, $tbl48, $tbl49, $tbl50, $tbl51, $tbl52, $tbl53, $tbl54, $tbl55, $tbl56, $tbl57, $tbl58, $tbl59, $tbl60, $tbl61, $tbl62, $tbl63, $tbl64, $tbl65, $tbl66, $tbl67, $tbl68, $tbl69, $tbl70, $tbl71, $tbl72, $tbl73, $tbl74, $tbl75, $tbl76, $tbl77, $tbl78, $tbl79, $tbl80, $tbl81, $tbl82, $tbl83, $tbl84, $tbl85, $tbl86, $tbl87, $tbl88, $tbl89, $tbl90, $tbl91, $tbl92, $tbl93, $tbl94, $tbl95, $tbl96, $tbl97, $tbl98, $tbl99, $tbl100, $tbl101, $tbl102, $tbl103, $tbl104, $tbl105, $tbl106, $tbl107, $tbl108, $tbl109, $tbl110, $tbl111, $tbl112, $tbl113, $tbl114, $tbl115, $tbl116, $tbl117, $tbl118, $tbl119, $tbl120, $tbl121, $tbl122, $tbl123, $tbl124, $tbl125, $tbl126, $tbl127, $tbl128, $tbl129, $tbl130, $tbl131, $tbl132, $tbl133, $tbl134, $tbl135, $tbl136, $tbl137, $tbl138, $tbl139, $tbl140, $tbl141, $tbl142, $tbl143, $tbl144, $tbl145, $tbl146, $tbl147, $tbl148, $tbl149, $tbl150, $tbl151, $tbl152, $tbl153, $tbl154, $tbl155, $tbl156, $tbl157, $tbl158, $tbl159, $tbl160, $tbl161, $tbl162, $tbl163, $tbl164, $tbl165, $tbl166, $tbl167, $tbl168, $tbl169, $tbl170, $tbl171, $tbl172, $tbl173, $tbl174, $tbl175, $tbl176, $tbl177, $tbl178, $tbl179, $tbl180, $tbl181, $tbl182, $tbl183, $tbl184, $tbl185, $tbl186, $tbl187, $tbl188, $tbl189, $tbl190, $tbl191, $tbl192, $tbl193, $tbl194, $tbl195, $tbl196, $tbl197, $tbl198, $tbl199, $tbl200, $tbl201, $tbl202, $tbl203, $tbl204, $tbl205, $tbl206, $tbl207, $tbl208, $tbl209, $tbl210, $tbl211, $tbl212, $tbl213, $tbl214, $tbl215, $tbl216, $tbl217, $tbl218, $tbl219, $tbl220, $tbl221, $tbl222, $tbl223, $tbl224, $tbl225, $tbl226, $tbl227, $tbl228, $tbl229, $tbl230, $tbl231, $tbl232, $tbl233, $tbl234, $tbl235, $tbl236, $tbl237, $tbl238, $tbl239, $tbl240, $tbl241, $tbl242, $tbl243, $tbl244, $tbl245, $tbl246, $tbl247, $tbl248, $tbl249, $tbl250, $tbl251, $tbl252, $tbl253, $tbl254, $tbl255, $tbl256, $tbl257, $tbl258, $tbl259, $tbl260, $tbl261, $tbl262, $tbl263, $tbl264, $tbl265, $tbl266, $tbl267, $tbl268, $tbl269, $tbl270, $tbl271, $tbl272, $tbl273, $tbl274, $tbl275, $tbl276, $tbl277, $tbl278, $tbl279, $tbl280, $tbl281, $tbl282, $tbl283, $tbl284, $tbl285, $tbl286, $tbl287, $tbl288, $tbl289, $tbl290, $tbl291, $tbl292, $tbl293, $tbl294, $tbl295, $tbl296, $tbl297, $tbl298, $tbl299, $tbl300, $tbl301, $tbl302, $tbl303, $tbl304, $tbl305, $tbl306, $tbl307, $tbl308, $tbl309, $tbl310, $tbl311, $tbl312, $tbl313, $tbl314, $tbl315, $tbl316, $tbl317, $tbl318, $tbl319, $tbl320, $tbl321, $tbl322, $tbl323, $tbl324, $tbl325, $tbl326, $tbl327, $tbl328, $tbl329, $tbl330, $tbl331, $tbl332, $tbl333, $tbl334, $tbl335, $tbl336, $tbl337, $tbl338, $tbl339, $tbl340, $tbl341, $tbl342, $tbl343, $tbl344, $tbl345, $tbl346, $tbl347, $tbl348, $tbl349, $tbl350, $tbl351, $tbl352, $tbl353, $tbl354, $tbl355, $tbl356, $tbl357, $tbl358, $tbl359, $tbl360, $tbl361, $tbl362, $tbl363, $tbl364, $tbl365, $tbl366, $tbl367, $tbl368, $tbl369, $tbl370, $tbl371, $tbl372, $tbl373, $tbl374, $tbl375, $tbl376, $tbl377, $tbl378, $tbl379, $tbl380, $tbl381, $tbl382, $tbl383, $tbl384, $tbl385, $tbl386, $tbl387, $tbl388, $tbl389, $tbl390, $tbl391, $tbl392, $tbl393, $tbl394, $tbl395, $tbl396, $tbl397, $tbl398);// this is the end of the array


$i = 6; // assign starting value to array index
$c = 0;
$D_credit = array();
$C_debit = array();

// get the values from multiple tables_assets
for ($b = 1; $b <= count($tables); $b++) {

    $table_name = $tables[$c];
    // echo "<br/> $i) $table_name";

    // Get "credit" and "debit" from all Balance sheet leafs and nodes
    $sql = "SELECT debit_balance, credit_balance FROM $table_name WHERE post_status = '$approved'";

    $result = mysqli_query($link, $sql);

    while ($row = mysqli_fetch_array($result)) {

        $D_credit[$i] += $row["credit_balance"];
        $C_debit[$i] += $row["debit_balance"];
        
    }

    // Check if there is an empty value from database and make it zero
    if (empty($C_debit[$i])) {

        $C_debit[$i] = 0;

    }
    
    if (empty($D_credit[$i])) {

        $D_credit[$i] = 0;

    }
    
    $i++;
    $c++;

} // End of getting data for all account numbers

$c = 6;
for ($b = 1; $b <= count($D_credit); $b++) {

    if ($c <= 65) {

        $assets_debit += $C_debit[$c];
        $assets_credit += $D_credit[$c];

    } elseif ($c <= 202) {

        $liability_debit += $C_debit[$c];
        $liability_credit += $D_credit[$c];

    } elseif ($c <= 243) {

        $income_debit += $C_debit[$c];
        $income_credit += $D_credit[$c];

    } elseif ($c <= 385) {

        $expense_debit += $C_debit[$c];
        $expense_credit += $D_credit[$c];

    } elseif ($c <= 392) {

        $contigent_assets_debit += $C_debit[$c];
        $contigent_assets_credit += $D_credit[$c];

    } elseif ($c <= 398) {

        $contigent_liability_debit += $C_debit[$c];
        $contigent_liability_credit += $D_credit[$c];

    }

    $c++;

}


$assets_net = $assets_debit - $assets_credit;
$liability_net = $liability_credit - $liability_debit;
$income_net = $income_credit - $income_debit;
$expense_net = $expense_debit - $expense_credit;
$contigent_assets_net = $contigent_assets_debit - $contigent_assets_credit;
$contigent_liability_net = $contigent_liability_credit - $contigent_liability_debit;
*/




// Get TABLE 'ckc_2021_balance_sheet_assets' data
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_assets_pending WHERE debit_balance_status = '$approved' OR credit_balance_status = '$approved'";

if ($result = mysqli_query($link, $sql)) {

    if (mysqli_num_rows($result) > 0) {
        
        while ($row = mysqli_fetch_array($result)) {

            $assets_debit += $row['debit_balance'];
            $assets_credit += $row['credit_balance'];
            $assets_net = $assets_debit - $assets_credit;

        }

        // Free result set
        mysqli_free_result($result);

    }

} else {

    echo "ckc_2021_balance_sheet_assets ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Get TABLE 'ckc_2021_balance_sheet_liability' data
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_liability_pending WHERE debit_balance_status = '$approved' OR credit_balance_status = '$approved'";

if ($result = mysqli_query($link, $sql)) {

    if (mysqli_num_rows($result) > 0) {
        
        while ($row = mysqli_fetch_array($result)) {

            $liability_debit += $row['debit_balance'];
            $liability_credit += $row['credit_balance'];
            $liability_net = $liability_credit - $liability_debit;

        }

        // Free result set
        mysqli_free_result($result);

    }

} else {

    echo "ckc_2021_balance_sheet_liability ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Get TABLE 'ckc_2021_balance_sheet_income' data
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_income_pending WHERE debit_balance_status = '$approved' OR credit_balance_status = '$approved'";

if ($result = mysqli_query($link, $sql)) {

    if (mysqli_num_rows($result) > 0) {
        
        while ($row = mysqli_fetch_array($result)) {

            $income_debit += $row['debit_balance'];
            $income_credit += $row['credit_balance'];
            $income_net = $income_credit - $income_debit;

        }

        // Free result set
        mysqli_free_result($result);

    }

} else {

    echo "ckc_2021_balance_sheet_income ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Get TABLE 'ckc_2021_balance_sheet_expense' data
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_expense_pending WHERE debit_balance_status = '$approved' OR credit_balance_status = '$approved'";

if ($result = mysqli_query($link, $sql)) {

    if (mysqli_num_rows($result) > 0) {
        
        while ($row = mysqli_fetch_array($result)) {

            $expense_debit += $row['debit_balance'];
            $expense_credit += $row['credit_balance'];
            $expense_net = $expense_debit - $expense_credit;

        }

        // Free result set
        mysqli_free_result($result);

    }

} else {

    echo "ckc_2021_balance_sheet_expense ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Get TABLE 'ckc_2021_balance_sheet_contigent_assets' data
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_contigent_assets_pending WHERE debit_balance_status = '$approved' OR credit_balance_status = '$approved'";

if ($result = mysqli_query($link, $sql)) {

    if (mysqli_num_rows($result) > 0) {
        
        while ($row = mysqli_fetch_array($result)) {

            $contigent_assets_debit += $row['debit_balance'];
            $contigent_assets_credit += $row['credit_balance'];
            $contigent_assets_net = $contigent_assets_debit - $contigent_assets_credit;

        }

        // Free result set
        mysqli_free_result($result);

    }

} else {

    echo "ckc_2021_balance_sheet_contigent_assets ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

// Get TABLE 'ckc_2021_balance_sheet_contigent_liability' data
$sql = "SELECT debit_balance, credit_balance FROM ckc_2021_balance_sheet_contigent_liability_pending WHERE debit_balance_status = '$approved' OR credit_balance_status = '$approved'";

if ($result = mysqli_query($link, $sql)) {

    if (mysqli_num_rows($result) > 0) {
        
        while ($row = mysqli_fetch_array($result)) {

            $contigent_liability_debit += $row['debit_balance'];
            $contigent_liability_credit += $row['credit_balance'];
            $contigent_liability_net = $contigent_liability_credit - $contigent_liability_debit;

        }

        // Free result set
        mysqli_free_result($result);

    }

} else {

    echo "ckc_2021_balance_sheet_contigent_assets ERROR: Could not able to execute $sql. " . mysqli_error($link);

}



// summary of 'debit', 'credit', 'net'
$debit = $assets_debit + $contigent_assets_debit + $contigent_liability_debit + $expense_debit + $income_debit + $liability_debit;

$credit = $assets_credit + $contigent_assets_credit + $contigent_liability_credit + $expense_credit + $income_credit + $liability_credit;

$net = $assets_net + $contigent_assets_net + $contigent_liability_net + $expense_net + $income_net + $liability_net;

?>