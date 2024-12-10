<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://www.trackermasgps.com/api-v2/tracker/list',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{"hash": "'.$hash.'"}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

//$.list[0].id

$arreglo=json_decode($response);

$trackers="";
$total="";

foreach ( $arreglo->list as $item){

    $id= $item->id ;

    $total="$total,$id";


    
}

$total =substr($total,1);

$ids= "[$total]";

//$ids="[10180284,10180528,10180706,10182417,10182698,10182708,10182730,10184147,10184148,10184149,10184150,10184151,10184152,10184153,10184154]";

//$ids='[10180284,10180528,10180706,10182417,10182698,10182708,10182730,10184147,10184148,10184149,10184150,10184151,10184152,10184153,10184154,10184155,10184156,10185487,10185501,10185765,10185766,10185814,10185837,10185841,10187219,10187415,10187416,10187525,10187529,10187531,10189202,10189254,10189478,10190205,10190209,10190605,10190607,10191084,10191213,10192135,10192288,10193887,10195912,10196191,10196192,10196196,10196199,10196200,10196203,10196205,10196207,10196209,10196210,10196211,10196212,10196214,10196216,10196218,10196219,10196220,10196221,10196222,10196223,10196227,10196228,10196229,10196230,10196231,10196232,10196233,10196234,10196237,10196238,10196239,10196241,10196242,10196248,10196249,10196250,10196254,10196255,10196257,10196258,10196260,10196261,10196397,10196399,10196400,10196412,10196414,10196415,10196418,10196420,10196421,10196425,10196427,10196429,10196437,10196469,10196471,10196473,10196474,10196476,10196487,10196489,10196492,10196493,10196499,10196502,10196515,10196520,10196521,10196530,10196537,10196543,10196547,10196548,10196549,10196550,10196551,10196552,10196553,10196555,10196556,10196558,10196560,10196561,10196562,10196563,10196564,10196565,10196575,10196578,10196580,10196581,10196583,10196584,10196587,10196588,10196590,10196591,10196592,10196593,10201705,10202042,10202055,10202057,10202059,10202061,10202082,10202131,10202135,10202163,10202173,10202191,10202273,10202274,10202275,10202286,10202287,10202288,10202289,10202307,10202308,10202368,10202369]';
//,10202385,10202386,10203169,10207366,10207368,10209395,10209396,10209398,10209399,10209407,10209408,10209409,10209410,10209411,10209414,10209415,10209416,10209417,10209418,10209428,10209430,10209431,10209432,10209462,10209463,10209464,10209465,10209466,10209481,10209483,10209485,10209488,10209490,10209500,10209501,10209502,10209506,10209507,10209508,10209510,10209513,10209515,10209516,10209517,10209542,10209545,10209552,10209553,10209554,10209555,10209560,10209561,10209564,10209877,10210547,10211769,10212544,10212549,10212550,10212630,10212990,10212991,10212993,10212994,10212995,10213005,10213006,10213008,10213009,10213010,10213262,10213263,10213265,10213266,10213267,10213278,10213279,10213281,10213282,10213283,10213292,10213293,10213294,10213295,10213296,10213297,10213298,10213299,10213300,10213301,10213374,10213377,10213379,10213380,10213381,10213383,10213384,10213385,10213386,10213387,10213388,10213389,10213393,10213394,10213395,10213396,10213397,10213398,10213399,10213400,10213401,10213402,10213426,10213428,10213431,10213432,10213434,10213501,10213503,10213510,10213516,10213517,10213518,10213520,10213523,10213525,10213527,10213528,10213529,10213531,10213532,10213533,10213534,10213535,10213536,10213539,10213540,10213541,10213542,10213544,10213545,10213546,10213551,10213552,10213553,10213554,10213555,10213556,10213557,10213558,10213559,10214696,10214697,10214700,10214701,10214702,10214704,10214705,10215011,10215014,10215018,10215019,10215021,10215030,10215031,10215032,10215033,10215034,10215925,10218185,10218210,10218214,10218463,10218469,10219406,10219407,10220453,10220471,10220721,10221597,10221600,10222361,10223941,10224568,10225580,10225814,10225853,10225870,10226812,10226814,10226815,10226820,10230105,10230142,10230147,10230166,10231138,10232636,10234644,10234645,10234647,10234648,10235098,10235099,10235106,10235248,10235810,10235811,10235821,10235834,10235835,10235852,10235853,10235856,10235861,10237228,10245548,10245566,10245568,10245571,10245574,10245576,10245577,10245578,10245579,10245580,10245581,10245582,10245583,10245613,10245614,10245616,10245619,10245626,10245636,10245637,10245639,10245640,10245642,10245643,10245688,10245691,10245693,10245695,10245699,10245701,10245706,10245708,10245710,10245711,10245712,10245716,10245717,10245934,10245939,10245944,10245945,10246001,10246003,10246005,10246006,10246007,10246008,10246010,10246012,10246015,10246016,10246017,10246018,10246020,10246021,10246143,10246144,10246145,10246146,10246147,10246148,10246149,10246150,10246152,10246153,10246154,10246155,10246156,10246158,10246159,10246160,10246161,10246162,10246163,10246164,10246167,10246168,10247481,10250332,10250333,10250334,10250337,10250338,10250339,10250340,10250341,10250342,10250343,10250347,10250349,10250351,10250352,10252687,10252823,10252824,10252828,10252830,10252851,10252852,10252855,10252856,10252870,10252872,10252875,10252877,10253284,10253285,10253287,10253288,10253289,10253290,10253291,10253293,10253294,10253295,10253326,10253327,10253328,10253329,10253330,10253331,10253332,10253334,10253335,10253336,10254043,10254071,10254080,10254082,10254108,10254109,10254110,10254117,10254465,10254468,10254469,10254739,10254742,10255154,10255349,10257116,10263383,10263384,10263385,10263387,10263391,10263392,10263435,10263436,10263438,10263442,10263444,10263453,10263456,10263458,10263461]';
