<?php
exit;
// 严格开发模式
//ini_set('display_errors', 'On');
ini_set('memory_limit','64M');
error_reporting(E_ALL);
require_once 'phpanalysis.class.php';
$str = "新华网北京７月３０日电（记者王慧慧、崔文毅）继２０１３年访问拉美之后，中国国家主席习近平７月再次访问该地区。专家认为，此访彰显新兴市场国家合作蓬勃发展势头，新兴市场国家和广大发展中国家合作将进一步推动国际关系民主化。
    提振国际社会对新兴市场国家信心
    ２００１年，高盛经济学家奥尼尔把世界四大新兴经济体巴西、俄罗斯、印度和中国的英文名首字母组合在一起，发音与英语单词“砖”类似，称其为“金砖四国”。２０１０年，南非加入，共称为“金砖国家”。受国际经济大环境影响，近期金砖国家经济增长有所放缓，国际上出现一些唱衰论调。
    专家认为，在此背景下，习近平访问拉美，出席金砖国家领导人会晤，有助于提升国际社会对新兴市场国家的信心，对外传递金砖国家团结、合作、包容、共赢的积极信号。
    中国社科院世界经济与政治研究所副研究员黄薇认为，金砖国家经济放缓既与外部因素有关，也是各国调整经济结构的客观结果。“即使增长放缓，金砖国家的经济增长速度依然是发达国家的两倍以上。”
    习近平此访的务实成果也使得金砖“褪色论”不攻自破。正式启动的金砖国家开发银行与应急储备安排，将为有关国家提供融资支持，提高抵御金融风险能力，也被认为有助于推动全球经济治理体系朝着公正合理的方向发展。
    复旦大学金砖国家研究中心主任樊勇明表示，从中长期看，金砖国家经济发展具有发达国家无法比拟的三大优势，即人口、资源和市场。金砖国家仍将是未来全球经济增长的重要拉动力量，国际社会有理由看好金砖国家经济前景。
    为拉美带来中国启示和中国机遇
    习近平访问巴西、阿根廷、委内瑞拉、古巴期间，中国和４国累计签署各类合同和框架协议１５０多项，涉及金额约７００亿美元，涵盖能源、矿业、电力、农业、科技、基础设施建设、金融等领域。中国、巴西、秘鲁决定合作探讨建设连接太平洋和大西洋的两洋铁路，中阿签署双边本币互换和核电合作协议。
    外交部长王毅表示，习近平主席将４国发展战略和中国改革开放相对接，将４国资源优势和中国市场潜力相对接，将４国发展需求和中国资金技术及装备优势相对接，提出加强宏观经济政策协调，扩大和深化务实合作，推进一批战略性大项目。
    值得注意的是，访问期间，拉美国家领导人往往提出希望借鉴中国的治国理政思路和经验。巴西总统罗塞夫细致地询问干部培养和城镇化进程等问题。阿根廷总统克里斯蒂娜说：“中国的发展是个奇迹。阿根廷钦佩中国的发展，愿意借鉴中国成功经验。”
    社科院拉美所研究员苏振兴表示，中国改革开放以来取得的成就举世瞩目，国际影响力大幅提升，令拉美国家羡慕。他们希望参考中国发展过程中成功经验和做法。而中国也根据拉美国家不同国情，与之开展投资、技术合作，帮助他们提高产品竞争力，改善道路桥梁和港口等基础设施，建设农业示范园区。
    推动完善全球治理
    此次金砖国家领导人会晤首次将政治安全问题列入议程，各方围绕国际安全形势和伊拉克、伊朗核、乌克兰、叙利亚、阿富汗、巴以等地区热点问题，以及恐怖主义、气候变化、能源安全、粮食安全、网络安全等全球性问题交换意见、协调立场，达成广泛共识。
    专家认为，金砖国家在许多重大国际和地区问题上共同发声、贡献力量，提高了发展中国家在国际舞台上的话语权和影响力。金砖国家领导人首度与南美国家领导人开展对话，说明金砖国家有广泛的代表性，使新兴市场大国与广大发展中国家的发展结合起来。
    苏振兴说，中拉合作首次实现领导人集体会晤，并将以中拉论坛为整体平台进行“立体升级”，充分体现出中拉合作着眼于让所有拉美国家人民受益。
    苏振兴说：“中拉论坛将使中国与拉美地区的合作朝着更加均衡、全面的方向发展，中拉在全球事务中加强协调和配合，有助于推动建立更加公正合理的国际秩序。”";
if($str){
    //岐义处理
    $do_fork =  true;
    //新词识别
    $do_unit =  true;
    //多元切分
    $do_multi =  true;
    //词性标注
    $do_prop =  false;
    //是否预载全部词条
    $pri_dict =  false;
    //初始化类
    PhpAnalysis::$loadInit = false;
    $pa = new PhpAnalysis('utf-8', 'utf-8', $pri_dict);
	$pa->resultType = 2;
    //载入词典
    $pa->LoadDict();
    //执行分词
    $pa->SetSource($str);
    $pa->differMax = $do_multi;
    $pa->unitWord = $do_unit;
    $pa->StartAnalysis( $do_fork );
	echo $pa->GetFinallyKeywords(105);
	//$data = $pa->GetFinallyIndex();
	//print_r($data);
    //echo $data = $pa->GetFinallyResult(',', $do_prop);
}



?>
