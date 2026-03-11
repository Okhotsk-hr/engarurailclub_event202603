<?php






$v_list = [
    // [0"番号", 1"画像URL", 2"分類1", 3"車両名", 4"両数", 5"メーカー/製品番号",6"説明",7"詳細リンク",8"アイコン"],
    //   [2003, "img/2003.jpg", "", "とれいゆつばさ", "6両", "KATO:10-937", "車内で足湯を楽しめる新幹線として2014年から2022年まで運行。<br>車内には足湯の他にも様々な設備やサービスがありました。<br>（写真左から2番目）", "", "http://www.trainfrontview.net/b/e3ty.png"],
    [2005, "img/star.jpg", "", "E4系MAX", "8/16両", "TOMIX:97947", "オール2階建て新幹線の2代目として登場したE4系。「MAX」の愛称で親しまれ、東北新幹線や上越新幹線、北陸新幹線など各地を走りました。<br>車両は2021年に引退した時のラストラン装飾です。", "", "http://www.trainfrontview.net/b/e4n.png"],
    [2006, "img/ok.jpg", "", "H5系", "10両", "TOMIX:92566/92567/92568", "", "", "http://www.trainfrontview.net/b/h5.png"],
    [2007, "img/e6.jpg", "", "E6系", "7両", "TOMIX:92489/92490", "", "", "http://www.trainfrontview.net/b/e6.png"],
    [2012, "img/40.jpg", "", "500系ハローキティ新幹線", "8両", "TOMIX:98662", "ハローキティ新幹線は山陽新幹線の新大阪～博多で運行中です。<br>車内外には様々なハローキティの姿があります。", "", "http://www.trainfrontview.net/b/w500k.png"],
    [2015, "img/sun.jpg", "", "九州新幹線800系GO！WAKU WAKU　SMILE", "6両", "TOMIX:97945", "九州新幹線で運行されたラッピング列車の1つで、ディズニーのキャラクターたちが描かれています。", "", "http://www.trainfrontview.net/b/k800.png"],
    [2017, "img/star.jpg", "", "N700Sかもめ", "6両", "TOMIX:98817", "西九州新幹線は2022年9月に開業した新幹線で、かもめ仕様となったN700Sが使われています。", "", "http://www.trainfrontview.net/b/k700s.png"],
    [3002, "img/ok.jpg", "", "キハ283系　オホーツク/大雪", "3/4両", "KATO:10-1894 / 10-1895", "現在の特急オホーツク・大雪。キハ183系の引退後、かつておおぞらなどで使われたキハ283系での運行になりました。<br>2025年3月のダイヤ改正から大雪は快速としてH100形での運行に代わります。", "", "http://www.trainfrontview.net/b/h283k_ok.png"],
    [3003, "img/e6.jpg", "", "789系1000番台カムイ", "5両", "KATO:10-1210", "", "", "http://www.trainfrontview.net/b/h789-1_kmi.png"],
    [3004, "img/40.jpg", "", "キハ183系オホーツク　ラストラン", "7両", "TOMIX:97959/93585", "2024年3月に定期列車から引退したキハ183系が同年4月にラストランとして走った7両編成の姿です。<br>復刻塗装の1,2号車と3両のハイデッカーグリーン車が連結されました。", "", "http://www.trainfrontview.net/b/h183-5_ok.png"],
    [3012, "img/sun.jpg", "", "サンダーバード", "9両", "KATO", "", "", "http://www.trainfrontview.net/b/w683n.png"],
    [3014, "img/star.jpg", "", "2700系", "5両", "TOMIX:97950", "2700系は、2000系の置き換えを目的に製造され、「南風」「しまんと」「あしずり」「あしずり」などの特急で使用されています。", "", "http://www.trainfrontview.net/b/s2700.png"],
    [3020, "img/ok.jpg", "", "東武鉄道500系リバティ", "3/6両", "ポポンデッタ:6010", "東武鉄道の特急リバティは、1編成3両で併結・分割をし3・6両で運行可能な特急です。   ", "", "http://www.trainfrontview.net/bp/tob501.png"],
    [3021, "img/e6.jpg", "", "西武鉄道　Laview", "8両", "マイクロエース:A-1030", "Laview(ラビュー)", "", "http://www.trainfrontview.net/bp/seb001.png"],
    [4001, "img/40.jpg", "", "キハ40形　北海道の恵み", "4両", "TOMIX:98076/98077", "「北海道の恵み」シリーズはキハ40形車両を改造し、北海道各地をイメージした車内外になっています。普段は普通列車として運行しています。<br><右から><br>道央花の恵み<br>道南海の恵み<br>道東森の恵み<br>道北流氷の恵み", "", "http://www.trainfrontview.net/b/h183-5_ok.png"],
    [4003, "img/sun.jpg", "", "花たびそうや", "2両", "TOMIX:98101", "キハ40形山明と紫水の山紫水明。<br>2023年まで臨時急行花たびそうやとして運行していました。<br>※現在花たびそうやは異なる車両での運行になっています。", "", "http://www.trainfrontview.net/b/h40ssv.png"],
    [5002, "img/star.jpg", "", "SL冬の湿原号", "6両", "KATO:10-1958", "北海道各地で走っていたSL臨時列車は、今や冬に釧路～標茶を走るSL冬の湿原号のみになりました。そんなSL冬の湿原号は今年で運行開始25周年になりました。", "", "http://www.trainfrontview.net/b/c11su.png"],
    [5005, "img/ok.jpg", "", "SL大樹", "5両", "TOMIX:8618/98563", "機関車：C11-325<br>客車：青色・展望車連結<br>SL大樹は東武鉄道の「SL復活運転プロジェクト」により2017年から運行を開始しました。全国各地から集まった車両や設備が使用され、運行開始から使用されていたSL C11-207は、北海道のSL臨時列車で活躍していた車両です。", "", "http://www.trainfrontview.net/bp/tob12tij.png"],
    [5008, "img/e6.jpg", "", "カシオペア", "12両", "TOMIX:98616/92410/8541", "上野～札幌で運行していた寝台特急。<br>現在は北海道までは来ていなく、カシオペア紀行など団体専用列車で運行中です。", "", "http://www.trainfrontview.net/b/e26.png"],
    [5011, "img/40.jpg", "", "オリエント・エクスプレス'88", "13両", "KATO:10-561/10-562", "オリエント・エクスプレス'88はフジテレビの開局30周年の企画としてヨーロッパを走行するオリエント急行が日本まで、そして日本を走りました。日本での運行の中では、青函トンネルを通って北海道までも来ることがありました。", "", ""],
    [5012, "img/sun.jpg", "", "TRAIN SUITE 四季島", "10両", "KATO:10-1447", "トランスイート四季島は寝台特急カシオペアの後継ぐ列車で、春から秋には青函トンネルを通って北海道に乗り入れるコースもあります。", "", "http://www.trainfrontview.net/b/e001.png"],
    [5013, "img/ok.jpg", "", "TWILIGHT EXPRESS  瑞風", "10両", "TOMIX:97912", "トワイライトエクスプレス瑞風は1989年から2015年に運行したトワイライトエクスプレスの伝統と誇りを引き継ぎ、山陽・山陰で運行しています。", "", "http://www.trainfrontview.net/b/w87.png"],
    [5014, "img/star.jpg", "", "ななつ星 in 九州", "8両", "KATO:10-1519", "", "", "http://www.trainfrontview.net/b/df200k7.png"],
    [5017, "img/sun.jpg", "", "サンライズエクスプレス", "7/14両", "KATO:10-1564/10-1565", "東京～高松（・琴平）を走るサンライズ瀬戸と東京～出雲市を走るサンライズ出雲は、日本で唯一毎日運行している寝台特急です。<br>イベントでは、東京～岡山で見られる2列車が併結した14両編成の姿で走ります。", "", "http://www.trainfrontview.net/b/w285.png"],
    [5018, "img/40.jpg", "", "WEST EXPRESS　銀河", "6両", "TOMIX:98714", "", "", "http://www.trainfrontview.net/b/w117wex.png"]
];

$i = 0;
while ($v_list[$i][0] != 3012) {
    $i++;
}
$thunder = [
    "http://www.trainfrontview.net/b/w683n.png",
    "http://www.trainfrontview.net/b/w683k4.png"
];

$v_list[$i][8] = $thunder[rand(0, 1)];

$i = 0;
while ($v_list[$i][0] != 5014) {
    $i++;
}
$star = [
    "http://www.trainfrontview.net/b/df200k7.png",
    "http://www.trainfrontview.net/b/k77.png"
];

$v_list[$i][8] = $star[rand(0, 1)];

$i = 0;
while ($v_list[$i][0] != 4001) {
    $i++;
}

$megumi = [
    "http://www.trainfrontview.net/f/h40y.png",
    "http://www.trainfrontview.net/f/h40y1.png",
    "http://www.trainfrontview.net/f/h40g1.png",
    "http://www.trainfrontview.net/f/h40g2.png",
    "http://www.trainfrontview.net/f/h40m1.png",
    "http://www.trainfrontview.net/f/h40m2.png",
    "http://www.trainfrontview.net/f/h40r.png",
    "http://www.trainfrontview.net/f/h40r1.png"
];
$v_list[$i][8] = $megumi[rand(0, 7)];

// $v_list[5][8] = $megumi[rand(0, 7)];


$i = 0;
while ($v_list[$i][0] != 4003) {
    $i++;
}
$sannsi = [
    "http://www.trainfrontview.net/f/h40ssg.png",
    "http://www.trainfrontview.net/f/h40ssv.png"
];

$v_list[$i][8] = $sannsi[rand(0, 1)];

$i = 0;
while ($v_list[$i][0] != 5008) {
    $i++;
}
$cassiopeia = [
    "http://www.trainfrontview.net/b/e26.png",
    "http://www.trainfrontview.net/b/e26p.png",
    "http://www.trainfrontview.net/b/e26f.png",
    "http://www.trainfrontview.net/b/e27dnkas.png",
    "http://www.trainfrontview.net/b/e27dnkas0.png"
];

$v_list[$i][8] = $cassiopeia[rand(0, 4)];
