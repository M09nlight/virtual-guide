// Map initialization

var map = L.map("map").setView([53.76, 27.74], 6);

let activeLng = TranslateGetCode();

/*==============================================
            TILE LAYER and WMS
================================================*/
//osm layer
var osm = L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
});
//osm.addTo(map);
// map.addLayer(osm)

// water color
var watercolor = L.tileLayer(
  "https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.{ext}",
  {
    attribution:
      'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    subdomains: "abcd",
    minZoom: 1,
    maxZoom: 16,
    ext: "jpg",
  }
);
// watercolor.addTo(map)

// dark map
var dark = L.tileLayer(
  "https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png",
  {
    attribution:
      '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
    subdomains: "abcd",
    maxZoom: 19,
  }
);
// dark.addTo(map)

// google street
googleStreets = L.tileLayer(
  "http://{s}.google.com/vt/lyrs=m" + "&hl=" + activeLng + "&x={x}&y={y}&z={z}",
  {
    maxZoom: 20,
    subdomains: ["mt0", "mt1", "mt2", "mt3"],
  }
);
googleStreets.addTo(map);

//google satellite
googleSat = L.tileLayer("http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}", {
  maxZoom: 20,
  subdomains: ["mt0", "mt1", "mt2", "mt3"],
});
// googleSat.addTo(map)

var wms = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
  layers: "geoapp:admin",
  format: "image/png",
  transparent: true,
  attribution: "wms test",
});

L.geoJson(belarusData).addTo(map);
/*==============================================
                    MARKER
================================================*/
var myIcon = L.icon({
  iconUrl: "images/marker.png",
  iconSize: [25, 25],
});

let arrayLocations = [];

//vitebsk
arrayLocations[0] = [55.19082271420831, 30.183906060308352];
arrayLocations[1] = [55.17020728931804, 30.083387912526057];
arrayLocations[2] = [55.251381, 30.14268];
arrayLocations[3] = [55.28957784818127, 30.325464409971385];
arrayLocations[4] = [55.32052704049649, 30.3370992743187];
arrayLocations[5] = [55.19789158864051, 29.96721263924901];
arrayLocations[6] = [55.08621376705287, 30.167971804879606];
arrayLocations[7] = [55.348852738035866, 29.307912800481176];
arrayLocations[8] = [54.51043575753485, 30.405878936604292];
arrayLocations[9] = [54.50713775605362, 30.422873422367864];
arrayLocations[10] = [54.50618082264546, 30.421362918899263];
arrayLocations[11] = [54.51025210989931, 30.430892428985402];

arrayLocations[12] = [54.503305, 30.417755];
arrayLocations[13] = [54.505561302858524, 30.430855070074863];
arrayLocations[14] = [55.02557065583585, 30.794376988633154];
arrayLocations[15] = [55.035493, 30.800459];
arrayLocations[16] = [55.031264, 30.797403];
arrayLocations[17] = [55.138688, 27.686397];
arrayLocations[18] = [55.139204, 27.696763];
arrayLocations[19] = [55.141069, 27.693193];
arrayLocations[20] = [55.119411, 27.671703];
arrayLocations[21] = [55.490574, 28.76913];
arrayLocations[22] = [55.4858140548741, 28.758137046023908];

arrayLocations[23] = [55.48624221389154, 28.758530983222347];
arrayLocations[24] = [55.48634055842239, 28.763431585621774];
arrayLocations[25] = [55.484049739919115, 28.768096681093432];
arrayLocations[26] = [55.48504640739752, 28.77076814137261];
arrayLocations[27] = [55.48407715087747, 28.777833343085273];
arrayLocations[28] = [55.50439543336367, 28.779897579809855];
arrayLocations[29] = [54.572237109385895, 30.687789454556775];
arrayLocations[30] = [54.5715282480307, 30.67924459299208];
arrayLocations[31] = [54.5756, 30.6677];
arrayLocations[32] = [54.40949965886493, 29.69509829492485];

arrayLocations[33] = [54.40686119143785, 29.70053794085795];
arrayLocations[34] = [54.407111, 29.704403];
arrayLocations[35] = [54.3819, 29.7602];
arrayLocations[36] = [54.857507, 29.160891];
arrayLocations[37] = [54.861801, 29.161733];
arrayLocations[38] = [54.864081, 29.161873];
arrayLocations[39] = [55.045536, 29.458448];
arrayLocations[40] = [55.047139, 29.456176];
arrayLocations[41] = [55.044963, 29.463269];
arrayLocations[42] = [55.045653, 29.460927];

arrayLocations[43] = [55.460983, 29.988234];
arrayLocations[44] = [55.46040061081096, 29.99061684089861];
arrayLocations[45] = [55.46286576308608, 29.98386638483176];
arrayLocations[46] = [54.879414658540156, 28.694254740240247];
arrayLocations[47] = [54.906383266222576, 28.69101744629874];
arrayLocations[48] = [54.889873901925434, 28.69228714708674];
arrayLocations[49] = [54.88932829363434, 28.692633278852085];
arrayLocations[50] = [54.89110546314165, 28.691645846599204];
arrayLocations[51] = [55.296307017743935, 29.618694019752137];
arrayLocations[52] = [55.314001588113605, 29.510219054688864];

arrayLocations[53] = [55.47071036669492, 29.310862276606862];
arrayLocations[54] = [55.192222, 29.488611];
arrayLocations[55] = [55.17917767124284, 28.613244414887];
arrayLocations[56] = [55.17760953537861, 28.611922890467838];
arrayLocations[57] = [55.2056690189692, 28.493412947405314];
arrayLocations[58] = [54.89394924433957, 27.764785247265984];
arrayLocations[59] = [54.89173817311678, 27.767062179197815];
arrayLocations[60] = [54.732954322836385, 28.060420845686];
arrayLocations[61] = [55.112227188329456, 26.843100824078054];
arrayLocations[62] = [55.1145743, 26.843705030682603];

arrayLocations[63] = [55.101965208130245, 26.837398552527233];

arrayLocations[64] = [54.811259, 29.708182];

arrayLocations[65] = [55.141058, 27.693665];
arrayLocations[66] = [55.639691, 27.031623];
arrayLocations[67] = [55.646678, 27.012739];
arrayLocations[68] = [55.63698, 27.038189];
arrayLocations[69] = [55.63371286940286, 27.049961830424454];
arrayLocations[70] = [55.62121008890513, 27.613337334572133];
arrayLocations[71] = [55.61454080668031, 27.63004654487324];
arrayLocations[72] = [55.7769969767922, 27.93518887395797];

arrayLocations[73] = [55.782452, 27.934503];
arrayLocations[74] = [55.7841959682247, 27.934133030714904];
arrayLocations[75] = [55.36627313136036, 27.46426897661902];
arrayLocations[76] = [55.368462, 27.497902];
arrayLocations[77] = [54.813474, 29.703984];

//Brest

arrayLocations[78] = [52.10268, 23.74957];
arrayLocations[79] = [52.08292, 23.65869];
arrayLocations[80] = [52.08292, 23.65869];
arrayLocations[81] = [52.09779, 23.68992];
arrayLocations[82] = [52.08236, 23.65748];
arrayLocations[83] = [52.0836, 23.66018];
arrayLocations[84] = [52.56929, 23.80388];
arrayLocations[85] = [52.61712, 23.89947];
arrayLocations[86] = [52.40487, 23.82037];
arrayLocations[87] = [52.86007, 24.89711];
arrayLocations[88] = [52.7656, 25.12234];
arrayLocations[89] = [52.0857, 23.67271];
arrayLocations[90] = [52.15594, 23.63859];

arrayLocations[91] = [52.08555, 23.69026];
arrayLocations[92] = [52.09326, 23.68602];
arrayLocations[93] = [52.20273, 23.679];
arrayLocations[94] = [52.22092, 23.42096];
arrayLocations[95] = [52.21813, 23.73999];
arrayLocations[96] = [51.56152, 23.60186];
arrayLocations[97] = [51.81274, 23.66025];
arrayLocations[98] = [51.82491, 23.88058];
arrayLocations[99] = [52.24138, 24.72665];
arrayLocations[100] = [52.23417, 24.00739];

arrayLocations[101] = [51.89417, 23.96131];
arrayLocations[102] = [52.2097, 24.35592];
arrayLocations[103] = [52.34895, 24.32197];
arrayLocations[104] = [51.98492, 24.21914];
arrayLocations[105] = [52.25172, 23.8889];
arrayLocations[106] = [52.04762, 23.67398];
arrayLocations[107] = [52.08678, 23.6865];
arrayLocations[108] = [52.08006, 23.65533];
arrayLocations[109] = [53.61545, 25.86921];
arrayLocations[110] = [52.10941, 25.3753];

//Gomel starts here

arrayLocations[111] = [51.7934, 30.2766];
arrayLocations[112] = [51.443, 30.5627];
arrayLocations[113] = [51.4377, 30.5607];
arrayLocations[114] = [51.4433, 30.566];
arrayLocations[115] = [51.8112, 30.3033];
arrayLocations[116] = [51.7765, 30.2667];
arrayLocations[117] = [52.7511, 30.6306];
arrayLocations[118] = [52.719, 30.5598];
arrayLocations[119] = [52.5581, 31.1719];
arrayLocations[120] = [52.5701, 31.1314];

arrayLocations[121] = [52.559132, 31.172214];
arrayLocations[122] = [52.55686379432557, 31.173158655779996];
arrayLocations[123] = [52.86690662140812, 30.993486138195635];
arrayLocations[124] = [52.7535, 31.3296];
arrayLocations[125] = [52.715369, 31.136866];
arrayLocations[126] = [52.422335214336655, 31.01668902067289];
arrayLocations[127] = [52.4264, 31.0137];
arrayLocations[128] = [52.433, 30.8474];
arrayLocations[129] = [52.5093, 30.7652];
arrayLocations[130] = [52.18060493989091, 30.816976586508225];

arrayLocations[131] = [52.42394850804586, 31.01743792951389];
arrayLocations[132] = [52.43023008343362, 31.013228115344297];
arrayLocations[133] = [52.0963, 31.1998];
arrayLocations[134] = [52.3504, 31.1141];
arrayLocations[135] = [52.1131, 31.7825]; //
arrayLocations[136] = [52.41452444837202, 31.314725777546755];
arrayLocations[137] = [52.3436, 31.5128];
arrayLocations[138] = [52.4064, 31.318];
arrayLocations[139] = [52.4193, 31.3153];
arrayLocations[140] = [51.8034, 29.152];

arrayLocations[141] = [51.8046, 29.1486];
arrayLocations[142] = [52.070921, 27.717853];
arrayLocations[143] = [52.073277, 27.723327];
arrayLocations[144] = [52.13950393304547, 26.890555999979444];
arrayLocations[145] = [52.054, 27.043]; //
arrayLocations[146] = [52.3476, 27.4968];
arrayLocations[147] = [52.0664, 27.7418];
arrayLocations[148] = [52.070897, 27.730318];
arrayLocations[149] = [52.0791, 27.7405];

arrayLocations[150] = [52.4064, 27.9713]; //
arrayLocations[151] = [52.963, 29.776];
arrayLocations[152] = [52.892268, 30.037358];
arrayLocations[153] = [52.7876, 30.3293];
arrayLocations[154] = [52.7294, 30.1119];
arrayLocations[155] = [52.5905, 30.2495];
arrayLocations[156] = [52.965, 29.784166667];
arrayLocations[157] = [52.90933606443006, 30.050263300510895];
arrayLocations[158] = [51.9423, 29.5331];
arrayLocations[159] = [51.9411, 29.528];

arrayLocations[160] = [52.4103, 29.0194];
arrayLocations[161] = [52.4696, 29.2425];
arrayLocations[162] = [52.3599, 29.5632];
arrayLocations[163] = [52.1206, 29.3348];
arrayLocations[164] = [52.1219, 29.3352];
arrayLocations[165] = [53.1908, 30.8697];
arrayLocations[166] = [53.1349, 30.7875];
arrayLocations[167] = [53.1268, 30.8043];
arrayLocations[168] = [53.1364, 30.7968];
arrayLocations[169] = [51.7825, 28.335];

arrayLocations[170] = [51.7834, 28.3276];
arrayLocations[171] = [51.78109869782202, 28.316069345779113];
arrayLocations[172] = [52.03, 30.731];
arrayLocations[173] = [51.9428, 30.8061];
arrayLocations[174] = [51.939, 30.8071];
arrayLocations[175] = [51.95140088544832, 30.807565678186627];
arrayLocations[176] = [51.9362, 30.7977];
arrayLocations[177] = [52.07368034181677, 29.22248927116433];
arrayLocations[178] = [52.0436, 29.261];
arrayLocations[179] = [52.0412, 29.2693];

arrayLocations[180] = [52.04877, 29.277268];
arrayLocations[181] = [52.0414, 29.2549];
arrayLocations[182] = [52.05222994470876, 29.20839560955852];
arrayLocations[183] = [52.045296, 29.257041];
arrayLocations[184] = [52.04263, 29.287793];
arrayLocations[185] = [52.047352, 29.265773];
arrayLocations[186] = [51.8063, 29.5013];
arrayLocations[187] = [51.62484902101795, 29.622957875003884];
arrayLocations[188] = [51.59420293922911, 29.80308591743346];
arrayLocations[189] = [51.59420293922911, 29.81308591743346];

arrayLocations[190] = [51.80857950021092, 29.48590770366505];
arrayLocations[191] = [51.7207, 29.3395];
arrayLocations[192] = [51.7152, 29.515];
arrayLocations[193] = [52.6325, 28.8861];
arrayLocations[194] = [52.65502018354023, 28.87857832029541];
arrayLocations[195] = [52.4839, 28.7341];
arrayLocations[196] = [52.1237, 28.493];
arrayLocations[197] = [52.1245, 28.4995];
arrayLocations[198] = [52.12490991713113, 28.495702701090845];
arrayLocations[199] = [52.136245424960244, 28.502856608247242];

// arrayLocations[200] = [52.354119519092, 30.376828208921218];
// arrayLocations[201] = [52.3713, 30.3892];
// arrayLocations[202] = [52.3719, 30.3885];
// arrayLocations[203] = [52.3691, 30.3984];
// arrayLocations[204] = [52.368248230108364, 30.395420335509307];
// arrayLocations[205] = [52.353335653470765, 30.37830602686832];
// arrayLocations[206] = [52.372689173923646, 30.389300428836076];
// arrayLocations[207] = [52.371069679658305, 30.38748627116393];
// arrayLocations[208] = [53.0687, 30.0205];
// arrayLocations[209] = [53.1017, 29.7306];

// arrayLocations[210] = [52.205779735607884, 30.5744221660863];
// arrayLocations[211] = [53.074, 30.0469];
// arrayLocations[212] = [53.0827, 30.0585];
// arrayLocations[213] = [53.0754, 30.0515];
// arrayLocations[214] = [53.1578, 30.4625];
// arrayLocations[215] = [53.08226172246998, 30.052096057672163];
// arrayLocations[216] = [52.6356, 29.7553];
// arrayLocations[217] = [52.6381, 29.716];
// arrayLocations[218] = [52.637, 29.7508];
// arrayLocations[219] = [52.62, 29.535];

// arrayLocations[220] = [51.88401244230103, 29.96364524538151];
// arrayLocations[221] = [51.6492, 29.9833];
// arrayLocations[222] = [51.89563595216077, 29.92121123695049];
// arrayLocations[223] = [51.8814, 29.7926];
// arrayLocations[224] = [51.9358, 29.6601];
// arrayLocations[225] = [52.9194, 30.9161];
// arrayLocations[226] = [52.9167, 30.9151];
// arrayLocations[227] = [52.948379248522016, 30.66247191851856];
// arrayLocations[228] = [52.9182, 30.9206];
// arrayLocations[229] = [52.9184, 30.9191];

// arrayLocations[230] = [52.9235, 30.9145];

//grodno starts here
arrayLocations[231] = [53.1961, 24.0142];
arrayLocations[232] = [53.1906, 24.0155];
arrayLocations[233] = [53.1928, 24.0193];
arrayLocations[234] = [53.1889, 24.0177];
arrayLocations[235] = [53.283386, 24.488854];
arrayLocations[236] = [53.12341, 24.34444];
arrayLocations[237] = [53.3108, 24.2025];
arrayLocations[238] = [53.1684, 24.2438];
arrayLocations[239] = [54.1469, 25.3166];

arrayLocations[240] = [54.2509, 25.4333];
arrayLocations[241] = [54.0418, 24.996];
arrayLocations[242] = [54.1275, 25.3631];
arrayLocations[243] = [54.072, 24.8389];
arrayLocations[244] = [54.0421, 24.9908];
arrayLocations[245] = [53.6726, 23.829];
arrayLocations[246] = [53.67669634477283, 23.823909522754427];
arrayLocations[247] = [53.67087619055359, 23.82644823620992];
arrayLocations[248] = [53.682674132043125, 23.833436873656247];
arrayLocations[249] = [53.674834854141416, 23.837763853967086];

arrayLocations[250] = [53.670974119794344, 23.8292145547206];
arrayLocations[251] = [53.6849, 23.8371];
arrayLocations[252] = [53.863576718614276, 23.731048642732663];
arrayLocations[253] = [53.6798, 23.83];
arrayLocations[254] = [53.67821, 23.81861];
arrayLocations[255] = [53.6998, 23.81667];
arrayLocations[256] = [53.68313, 23.81667];
arrayLocations[257] = [53.6843, 23.84142];
arrayLocations[258] = [53.6724, 23.8245];
arrayLocations[259] = [53.147408057998845, 24.821934194033528];

arrayLocations[260] = [53.0792, 24.8511];
arrayLocations[261] = [53.1306, 24.9193];
arrayLocations[262] = [53.141767, 24.631218];
arrayLocations[263] = [53.183336, 24.879154];
arrayLocations[264] = [53.07477098847333, 24.884825026481302];
arrayLocations[265] = [53.089908, 24.850745];
arrayLocations[266] = [53.1477, 24.8136];
arrayLocations[267] = [53.1502, 24.8065];
arrayLocations[268] = [53.1231, 25.1576];
arrayLocations[269] = [53.2449, 24.9215];

arrayLocations[270] = [53.248966, 24.923407];
arrayLocations[271] = [53.17764405894702, 25.033463266352186];
arrayLocations[272] = [53.2153, 24.6812];
arrayLocations[273] = [53.4515, 26.4731];
arrayLocations[274] = [53.4549, 26.463];
arrayLocations[275] = [53.4674, 26.025];
arrayLocations[276] = [53.569, 26.4394];
arrayLocations[277] = [53.3962, 26.3196];
arrayLocations[278] = [53.5261, 26.313];
arrayLocations[279] = [53.5713, 26.1376];

arrayLocations[280] = [53.8809, 25.3029];
arrayLocations[281] = [53.9977, 25.3858];
arrayLocations[282] = [53.8944, 25.304];
arrayLocations[283] = [53.7161, 25.5064];
arrayLocations[284] = [53.7894, 25.4581];
arrayLocations[285] = [53.9215, 25.5043];
arrayLocations[286] = [53.7156, 24.986];
arrayLocations[287] = [53.41063, 25.57444];
arrayLocations[288] = [53.46508, 25.40473];
arrayLocations[289] = [53.462698642616225, 25.396569616972947];

arrayLocations[290] = [53.9326, 25.7808];
arrayLocations[291] = [54.0078, 25.6037];
arrayLocations[292] = [53.4187, 24.5404];
arrayLocations[293] = [53.3681, 24.1701];
arrayLocations[294] = [53.4447, 24.3706];
arrayLocations[295] = [53.6011, 25.8277];
arrayLocations[296] = [53.5945, 25.8258];
arrayLocations[297] = [53.5983, 25.8226];
arrayLocations[298] = [54.6871, 26.1443];
arrayLocations[299] = [54.80064, 25.8825];

// arrayLocations[300] = [54.8141, 26.1647];
// arrayLocations[301] = [54.2448, 26.0204];
// arrayLocations[302] = [54.4235, 25.9359];
// arrayLocations[303] = [54.42443828486486, 25.935757680976362];
// arrayLocations[304] = [53.8163, 24.5562];
// arrayLocations[305] = [52.94664482663413, 24.378837213491774];
// arrayLocations[306] = [52.9369, 24.3679];
// arrayLocations[307] = [53.0078, 25.3444];
// arrayLocations[308] = [53.0975, 25.3302];
// arrayLocations[309] = [53.09329, 25.3176];

// arrayLocations[310] = [54.3037, 26.2841];
// arrayLocations[311] = [54.4129, 26.5224];
// arrayLocations[312] = [54.51591, 26.17972];
// arrayLocations[313] = [53.92491368260921, 24.55910169162868];
// arrayLocations[314] = [53.691, 24.9997];
// arrayLocations[315] = [53.6652, 24.877];

//minsk starts here
arrayLocations[316] = [53.930215, 27.636122];
arrayLocations[317] = [53.89650700318912, 27.54701640468202];
arrayLocations[318] = [53.93142364151076, 27.646015690213293];
arrayLocations[319] = [53.903133, 27.573285];

arrayLocations[320] = [53.92194124096469, 27.616677428836073];
arrayLocations[321] = [53.91615849212181, 27.612478542327842];
arrayLocations[322] = [53.946552655517515, 27.457802837532206];
arrayLocations[323] = [53.9106185, 27.5617067];
arrayLocations[324] = [53.89831033751106, 27.560725584655643];
arrayLocations[325] = [53.89707127639761, 27.556906119012588];
arrayLocations[326] = [53.897269, 27.548557];
arrayLocations[327] = [53.910219860312615, 27.579613653967087];
arrayLocations[328] = [54.202011, 27.240586];
arrayLocations[329] = [53.834194, 27.374062];

arrayLocations[330] = [53.91465536528885, 26.451816547301373];
arrayLocations[331] = [53.828, 27.3385];
arrayLocations[332] = [52.870741, 27.86477];
arrayLocations[333] = [53.635077, 27.222096];
arrayLocations[334] = [54.201105, 27.384912];

//mogilev starts here
arrayLocations[335] = [53.909712720117895, 30.343050235582048]; 
arrayLocations[336] = [53.894572, 30.331993];
arrayLocations[337] = [53.89585726231228, 30.333947741356017];
arrayLocations[338] = [53.89495560137954, 30.329574653967086];
arrayLocations[339] = [53.897254720560255, 30.33151680908841];

arrayLocations[340] = [53.895219, 30.332375];
arrayLocations[341] = [53.89446037826019, 30.330550964638267];
arrayLocations[342] = [53.8994, 30.338747];
arrayLocations[343] = [53.897538, 30.333286];
arrayLocations[344] = [53.91018754286324, 30.34122275396709];
arrayLocations[345] = [53.90012176983133, 30.33396104630426];

//minsk region starts here

arrayLocations[346] = [53.22272853677656, 26.692515013580625];
arrayLocations[347] = [54.20036071490909, 27.847552198276407];
arrayLocations[348] = [53.96401567757565, 27.359992417097512];
arrayLocations[349] = [54.859098, 26.769194];
arrayLocations[350] = [54.14234561029993, 26.605788098075152];
arrayLocations[351] = [53.63447050639017, 27.22287818050318];
arrayLocations[352] = [53.47271811861578, 26.910244078649804];
arrayLocations[353] = [54.896025, 26.906384];
arrayLocations[354] = [53.93537407513896, 27.31674042894885];
// arrayLocations[355] = [54.202012, 27.240580];
arrayLocations[356] = [53.67474409887508, 27.963954777936692];
arrayLocations[357] = [53.61818546114022, 27.22459364315169];
arrayLocations[358] = [53.95290736446795, 27.45227152894963];
arrayLocations[359] = [53.963196584583876, 27.650795734491837];

arrayLocations[360] = [53.90329384225615, 27.56284851175921];
arrayLocations[361] = [53.59632623974682, 27.68340418845406];
arrayLocations[362] = [53.83256681983123, 27.37381508235784];
arrayLocations[363] = [54.00741819429303, 27.286249365175976];
arrayLocations[364] = [53.848644, 27.065518];
arrayLocations[365] = [54.021765, 26.598002];
arrayLocations[366] = [53.953056, 27.265556];
arrayLocations[367] = [54.245383150107294, 28.50535357811586];
arrayLocations[368] = [53.91198315326573, 27.572101462761854];
arrayLocations[369] = [54.48825143384962, 26.91640932712278];

//mogilev region starts here
arrayLocations[370] = [54.2006567412853, 30.299733615465044];
arrayLocations[371] = [54.104212, 29.516565];
arrayLocations[372] = [53.141378653917414, 29.24119795775432];
arrayLocations[373] = [53.157691957768606, 29.693217629937447];
arrayLocations[374] = [53.68802432535038, 31.71181769640973];
arrayLocations[375] = [53.155933, 29.689715];
arrayLocations[376] = [53.143333163698294, 29.228428624098047];
arrayLocations[377] = [54.29529765055815, 30.99004770917084];
arrayLocations[378] = [53.863197, 30.26059];
arrayLocations[379] = [53.63614279567999, 30.48238749158669];

arrayLocations[380] = [53.1394007084826, 29.22197105164922];
arrayLocations[381] = [53.51829140781244, 30.25908912708588];
arrayLocations[382] = [54.019701, 31.72678];
arrayLocations[383] = [53.89472731843469, 30.332134088465324];
arrayLocations[384] = [53.142962595093806, 29.224791105135942];
arrayLocations[385] = [54.01984529684313, 31.725844151682455];
arrayLocations[386] = [53.13371409694705, 29.22853025108566];
arrayLocations[387] = [53.86149161545211, 30.256056974970047];
arrayLocations[388] = [53.420765, 30.274123];
arrayLocations[389] = [53.542088782279265, 30.914579935988638];

arrayLocations[390] = [54.101608, 31.748242];
arrayLocations[391] = [53.60582248178074, 30.265863003185412];
arrayLocations[392] = [53.86903046047177, 30.324249403242348];
arrayLocations[393] = [53.998581105764956, 29.72121537481876];
arrayLocations[394] = [53.96319652536529, 30.384420143727933];
arrayLocations[395] = [53.1447310918017, 29.237139732050217];
arrayLocations[396] = [54.070913, 29.49903];
arrayLocations[397] = [53.893627, 30.439521];
arrayLocations[398] = [54.194876, 29.813566];
arrayLocations[399] = [53.934652, 30.300067];

let arrayLocationsSorted = [];

for (let index = 0; index < arrayLocations.length; index++) {
  if (arrayLocations[index] != undefined) {
    arrayLocationsSorted.push(arrayLocations[index]);
  }
}
let elementsFromPage = document.getElementsByClassName("sights");
let elem = [];

let defaultElem = document.createElement("div");
defaultElem.classList.add("sights");
defaultElem.setAttribute("hidden", "true");

let step = 0;
for (let index = 0; index < arrayLocationsSorted.length; index++) {
  elem[index] = elementsFromPage[index];
}

for (let index = 0; index < elem.length; index++) {
  elem[index]?.classList.remove("sights");
}

let marker = [];
let markersRoute = [];
let popup = [];
var routingControl = [];
let checkbox = checkboxList;

for (let i = 0; i < arrayLocationsSorted.length; i++) {
  if (arrayLocationsSorted[i] != undefined) {
    marker[i] = L.marker(arrayLocationsSorted[i], {
      icon: myIcon,
      draggable: false,
    });

    if (elem[i] != null) {
      popup[i] = marker[i].bindPopup(elem[i].innerHTML);
      popup[i].addTo(map);
    }
  }
  //console.log(marker[i].toGeoJSON())
}

for (let i = 0; i < marker.length; i++) {
  marker[i].on("click", function (e) {
    if (elem[i].firstChild.className != "image" && elem[i].firstChild.nextElementSibling.className != "image") {
      let imgBlock = document.createElement("div");
      imgBlock.setAttribute("class", "image");

      let imgSrc = document.createElement("img");
      imgSrc.setAttribute("src", imagesSrcArrSorted[i]);
      imgBlock.appendChild(imgSrc);

      elem[i].insertBefore(imgBlock, elem[i].firstChild);
      popup[i] = marker[i].bindPopup(elem[i].innerHTML);
      popup[i].addTo(map);
    }
  });
}

// function changeRoute(e) {
//   let checkId = checkbox[0].id;
//   for (let j = 1; j < checkbox.length; j++) {
//     if (checkbox[j].id == checkId) {
//       if (checkbox[0].checked) {
//         checkbox[j].setAttribute("checked", "checked");
//         console.log(elem[j - 1].innerHTML);
//         map._popup.setContent(elem[j - 1].innerHTML);
//         onPopupOpen(marker[j - 1]);
//       } else {
//         checkbox[j].removeAttribute("checked");
//         map._popup.setContent(elem[j - 1].innerHTML);
//         onPopupClose(marker[j - 1]);
//       }
//     }
//   }
// }

// function onPopupOpen(tempMarker) {
//   var newMarker = L.marker([
//     tempMarker._latlng.lat,
//     tempMarker._latlng.lng,
//   ]).addTo(map);
//   markersRoute.push(newMarker);

//   let control = L.Routing.control({
//     waypoints: [
//       // L.latLng(lc._marker._latlng.lat, lc._marker._latlng.lng),
//       L.latLng(55.2004, 24.2),
//       L.latLng(tempMarker._latlng.lat, tempMarker._latlng.lng),
//     ],
//   })
//     .on("routesfound", function (e) {
//       var routes = e.routes;
//       console.log(routes);

//       let routeIcon = L.icon({
//         iconUrl: "images/car.png",
//         iconSize: [70, 70],
//       });
//       let route = L.marker([28.238, 83.9956], { icon: routeIcon }).addTo(map);

//       console.log(tempMarker);
//       console.log(e);
//       e.routes[0].coordinates.forEach(function (coord, index) {
//         setTimeout(function () {
//           route.setLatLng([coord.lat, coord.lng]);
//         }, 100 * index);
//       });
//     })
//     .addTo(map)
//     .on("waypointschanged", function (e) {
//       let newWaypoints = e.waypoints;
//       for (let i = 1; i < newWaypoints.length - 1; i++) {}
//       console.log("waypoint changed");
//       // routingControl[0].setWaypoints([
//       //     L.latLng(12, 12),
//       //     L.latLng(22, 22)
//       //   ]);
//     });
//   routingControl.push(control);
// }

// function onPopupClose(endMarker) {
//   for (let i = 0; i < routingControl.length; i++) {
//     let lastPoint = routingControl[i].getWaypoints().length - 1;
//     if (
//       JSON.stringify(routingControl[i].getWaypoints()[lastPoint].latLng) ===
//       JSON.stringify(endMarker._latlng)
//     ) {
//       map.removeControl(routingControl[i]);
//     }
//   }

//   for (let i = 0; i < markersRoute.length; i++) {
//     if (
//       JSON.stringify(markersRoute[i]._latlng) ===
//       JSON.stringify(endMarker._latlng)
//     ) {
//       map.removeLayer(markersRoute[i]);
//     }
//   }
// }

// function clearAll() {
//   for (let i = 0; i < routingControl.length; i++) {
//     map.removeControl(routingControl[i]);
//   }
//   routingControl = [];
//   for (let i = 0; i < markersRoute.length; i++) {
//     map.removeLayer(f[i]);
//   }
// }

/*==============================================
                LEAFLET EVENTS
================================================*/
map.on("mouseover", function () {});

map.on("mousemove", function (e) {
  //document.getElementsByClassName('coordinate')[0].innerHTML = 'lat: ' + e.latlng.lat + 'lng: ' + e.latlng.lng;
  //  console.log('lat: ' + e.latlng.lat, 'lng: ' + e.latlng.lng)
});
