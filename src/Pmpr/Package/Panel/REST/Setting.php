<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614b6596e05b4             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel\REST; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\Panel\Setting as Options; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; use WP_REST_Server; class Setting extends Common { public function __construct() { $this->rest_base = "\163\145\x74\164\x69\156\147"; parent::__construct(); } public function register_routes() { $this->register("\57\x67\145\164\55\x6f\160\x74\151\x6f\x6e\163", ["\141\162\x67\163" => [], "\155\x65\164\x68\x6f\144\x73" => self::READABLE, "\143\x61\154\x6c\142\x61\x63\x6b" => [$this, "\x67\x6b\x77\x6b\161\155\167\167\x65\151\x61\x77\x69\147\x61\145"], "\160\145\162\155\x69\x73\163\x69\157\156\137\143\141\x6c\x6c\142\x61\x63\x6b" => [$this, "\141\x63\x6b\x75\141\x69\147\151\x6f\143\163\x67\x79\x71\167\145"]]); $this->register("\57\x67\145\164\x2d\164\162\141\156\x73\x6c\x61\x74\x69\157\156\163", ["\x61\162\147\x73" => [], "\155\145\x74\150\x6f\144\163" => self::READABLE, "\x63\x61\154\x6c\142\141\143\x6b" => [$this, "\x79\141\145\x67\171\161\x6b\143\161\167\157\167\x61\x75\x67\x61"], "\160\145\162\155\x69\163\x73\151\x6f\156\x5f\143\141\154\154\142\x61\x63\x6b" => [$this, "\141\x63\x6b\165\x61\x69\147\x69\157\x63\x73\147\171\161\167\x65"]]); } public function yaegyqkcqwowauga(WP_REST_Request $aqmwamyiwgeeymqa) { goto sioekkmekwygemyc; sioekkmekwygemyc: $qsmicgaymwwckcsa = ["\x6c\157\147\x6f\165\164" => [self::TEXT => __("\x41\162\x65\x20\171\157\x75\40\x73\x75\162\145\40\x79\157\165\40\x77\141\x6e\x74\x20\164\x6f\40\154\x6f\x67\157\x75\x74\77", PR__PKG__PANEL), self::TITLE => __("\114\x6f\x67\x6f\165\164", PR__PKG__PANEL)], "\x6e\x6f" => __("\116\x6f\41", PR__PKG__PANEL), "\171\x65\163" => __("\131\145\163\x21", PR__PKG__PANEL), "\150\145\154\x6c\x6f" => __("\x48\151", PR__PKG__PANEL), "\x61\160\x69\137\x6b\145\171" => __("\101\x50\x49\40\x4b\145\x79", PR__PKG__PANEL), "\167\145\x6c\143\x6f\x6d\x65" => __("\127\x65\154\x63\x6f\x6d\145\41", PR__PKG__PANEL), "\155\x79\x5f\x70\x72\157\146\x69\x6c\x65" => __("\x4d\171\x20\120\162\x6f\146\x69\154\145", PR__PKG__PANEL), "\x66\157\x72\155\137\156\157\x74\137\x63\x68\141\156\x67\x65\x64" => __("\116\157\x74\x68\x69\x6e\147\x20\151\x73\40\x63\150\141\x6e\147\145\40\x74\157\40\x73\141\166\145\56", PR__PKG__PANEL), "\156\157\164\x5f\x66\157\165\156\x64\x5f\162\145\143\x6f\162\144" => __("\x54\x68\x65\x72\x65\x20\x69\x73\x20\156\x6f\x20\x72\145\143\157\162\144\x20\171\x65\164\x2e", PR__PKG__PANEL), "\141\143\164\151\157\156" => ["\163\x61\166\x65" => __("\123\x61\x76\145\40\103\150\141\x6e\x67\x65\163", PR__PKG__PANEL), "\x63\x61\156\x63\x65\x6c" => __("\103\x61\156\x63\145\x6c", PR__PKG__PANEL), "\166\145\162\151\146\x79" => __("\x56\145\162\x69\x66\171", PR__PKG__PANEL)], "\x61\165\x74\x68" => ["\x74\151\x74\x6c\x65" => ["\141\x75\164\150" => __("\101\165\164\x68\145\x6e\164\x69\x63\x61\x74\x69\x6f\156", PR__PKG__PANEL), "\154\x6f\x67\x69\156" => __("\114\x6f\147\x69\156", PR__PKG__PANEL), "\146\157\x72\147\x65\x74" => __("\106\157\162\x67\145\x74\x20\120\141\x73\163\167\157\162\x64", PR__PKG__PANEL), "\162\145\x67\151\163\164\x65\162" => __("\x52\x65\x67\x69\163\164\145\x72", PR__PKG__PANEL)]], "\146\157\x72\x6d" => ["\151\156\x70\x75\x74" => ["\x65\x6d\x61\151\154" => __("\x45\x6d\141\151\154", PR__PKG__PANEL), "\x70\x61\163\163\167\x6f\162\x64" => __("\x50\141\x73\x73\167\x6f\162\x64", PR__PKG__PANEL)], "\151\x6e\166\x61\154\151\x64\137\x64\x61\164\x61" => ["\164\151\x74\x6c\x65" => __("\x49\156\x76\141\154\x69\x64\40\104\141\x74\141", PR__PKG__PANEL), "\x74\145\x78\164" => __("\120\x6c\145\141\163\145\x2c\40\x70\162\157\166\x69\x64\145\x20\143\157\x72\x72\x65\x63\164\x20\144\141\x74\x61", PR__PKG__PANEL)], "\x61\x75\164\150" => ["\x66\157\162\147\145\164\x5f\160\141\163\x73\167\x6f\162\x64" => __("\106\157\x72\x67\x65\164\x20\x50\x61\x73\163\167\x6f\x72\144", PR__PKG__PANEL)]], "\x63\x6f\x6c\x75\x6d\156" => ["\x61\143\164\151\157\x6e" => ["\x61\144\x64" => __("\x41\x64\x64", PR__PKG__PANEL), "\154\x69\x73\164" => __("\114\151\163\x74", PR__PKG__PANEL), "\145\x64\x69\164" => __("\105\x64\151\164", PR__PKG__PANEL), "\x73\150\157\167" => __("\x53\150\x6f\x77", PR__PKG__PANEL), "\144\145\x6c\x65\164\x65" => __("\x44\x65\154\x65\164\x65", PR__PKG__PANEL)], self::URL => __("\125\x72\154", PR__PKG__PANEL), self::NAME => __("\x4e\141\155\x65", PR__PKG__PANEL), self::USER => __("\x55\x73\145\162", PR__PKG__PANEL), "\141\x63\164\x69\x6f\156\163" => __("\x41\x63\164\151\x6f\156\x73", PR__PKG__PANEL), "\143\x72\x65\x61\164\145\144\x5f\x61\164" => __("\x43\162\145\x61\x74\x65\144\x20\101\x74", PR__PKG__PANEL), self::STATUS => __("\x53\x74\141\164\x75\x73", PR__PKG__PANEL), self::CAPABILITY => __("\103\141\160\141\x62\151\x6c\151\164\171", PR__PKG__PANEL)], "\166\141\x6c\x69\x64\x61\164\x69\x6f\x6e" => ["\x69\x6e\x76\141\154\x69\x64" => sprintf(__("\x25\163\40\151\163\40\x6e\157\164\x20\166\141\154\x69\144", PR__PKG__PANEL), "\173\x7b\156\x61\x6d\x65\x7d\175"), "\162\x65\161\165\151\x72\145\144" => sprintf(__("\x25\163\40\151\163\x20\x72\x65\x71\165\x69\x72\145\x64", PR__PKG__PANEL), "\x7b\x7b\x6e\x61\x6d\145\175\x7d"), "\155\151\156\x5f\x6c\145\156\147\164\x68" => sprintf(__("\x25\163\40\155\x69\x6e\151\155\165\155\x20\x6c\145\x6e\147\x74\x68\40\x69\x73\x20\x25\x73", PR__PKG__PANEL), "\x7b\173\x6e\141\155\x65\175\x7d", "\173\x7b\155\x69\156\175\x7d")], "\160\x61\147\151\156\141\x74\151\x6f\156" => ["\x69\156\146\x6f" => __("\x44\x69\x73\160\x6c\x61\x79\x69\156\x67\40\45\163\x20\x74\157\40\x25\163\x20\157\x66\40\45\163\x20\x69\x74\x65\x6d\163", PR__PKG__PANEL)], "\164\162\145\145\x73\x65\154\x65\143\x74" => [self::LIMIT => __("\x61\156\144\40\x25\x73\40\x6d\157\x72\x65", PR__PKG__PANEL), "\163\145\141\x72\143\150" => __("\x54\171\160\x65\x20\x74\x6f\40\163\x65\141\x72\x63\x68\56\x2e\56", PR__PKG__PANEL), "\154\157\x61\144\x69\x6e\x67" => __("\x4c\x6f\x61\144\151\156\147\56\x2e\x2e", PR__PKG__PANEL), "\x63\154\x65\x61\x72\x5f\x61\154\154" => __("\x43\154\145\141\162\x20\x61\x6c\x6c", PR__PKG__PANEL), "\156\x6f\137\157\160\x74\x69\x6f\156\x73" => __("\116\157\x20\x6f\x70\x74\x69\157\x6e\163\40\141\166\141\x69\154\141\x62\154\145\56", PR__PKG__PANEL), "\156\x6f\x5f\162\x65\163\165\154\164\x73" => __("\x4e\x6f\x20\162\145\x73\165\x6c\x74\163\x20\x66\x6f\165\156\x64\56\x2e\56", PR__PKG__PANEL), "\143\x6c\x65\x61\162\137\166\141\154\165\x65" => __("\103\154\x65\141\x72\x20\166\141\x6c\x75\145", PR__PKG__PANEL), "\156\157\137\143\x68\151\x6c\x64\162\x65\156" => __("\116\x6f\40\163\x75\142\55\157\x70\x74\x69\157\156\x73\x2e", PR__PKG__PANEL), "\162\145\x74\x72\x79" => [self::TEXT => __("\x52\x65\x74\162\x79\77", PR__PKG__PANEL), self::TITLE => __("\103\154\151\x63\153\x20\164\x6f\x20\x72\145\164\162\171", PR__PKG__PANEL)]]]; goto yiowgigkkwsoqcci; ieqesiiageaauiuw: return $this->ewmkmmsuiuwmmwoy($qsmicgaymwwckcsa); goto gamqcwuwkikwqoay; yiowgigkkwsoqcci: $qsmicgaymwwckcsa = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x61\156\x65\x6c\x5f\x74\162\141\156\x73\154\x61\164\151\x6f\x6e\163"), $qsmicgaymwwckcsa); goto ieqesiiageaauiuw; gamqcwuwkikwqoay: } public function gkwkqmwweiawigae(WP_REST_Request $aqmwamyiwgeeymqa) { goto oqousikwiiqagoyw; egmayaiikwsskgmy: mscyggqcesgqqksu: goto ucuoeymyqeokgsya; aueaceeyommgkicu: $keccaugmemegoimu = []; goto mysueeoswqgccmui; oqousikwiiqagoyw: $amakmumgguksgmum = Options::symcgieuakksimmu(); goto zayqqeqgcwkekwws; mysueeoswqgccmui: foreach ($qiouiwasaauyaaue as $omqquekswieeogws => $omkysikckkcieckq) { goto qikaewekoecykeou; aiccyaswigkaycqk: oyeyomcgkmgymogq: goto sqyokemumceysegy; usymasgsyqgsuocg: iesekaeqeomeuaui: goto aiccyaswigkaycqk; eucqomyqykgoiuge: wsesqmcqoiyyqkqi: goto usymasgsyqgsuocg; qikaewekoecykeou: switch ($omqquekswieeogws) { case $amakmumgguksgmum::SIDE_LOGO: case $amakmumgguksgmum::SMALL_LOGO: goto wkwamkgkwykeqkec; oeocukauoyosicso: $keccaugmemegoimu[$omqquekswieeogws] = ManipulateArray::get(ManipulateAttachment::uikkssqcoewckces((int) $weowoqykiyuqcwam), 0); goto suqceasgacskcmkc; oimkeqocuguqqsqk: if (!$weowoqykiyuqcwam) { goto mogkoocsoeuyoqqa; } goto oeocukauoyosicso; wkwamkgkwykeqkec: $weowoqykiyuqcwam = $amakmumgguksgmum::eiwcuqigayigimak($omqquekswieeogws . self::_ID); goto oimkeqocuguqqsqk; suqceasgacskcmkc: mogkoocsoeuyoqqa: goto yykqaowwsqgqysmq; yykqaowwsqgqysmq: goto iesekaeqeomeuaui; goto kwiggogcgciwuwqk; kwiggogcgciwuwqk: case $amakmumgguksgmum::PAGE_LINKS: goto suqcsgaosywaauuu; wwukgaquuyoissgy: foreach ($omkysikckkcieckq as $ucsmiamgwmayyoco) { goto yuimwyoywaiiqacs; qiiigwkqeoewsuwm: yoqakewookqoqacm: goto esaqcqqwuussiiwo; yuimwyoywaiiqacs: $ucsmiamgwmayyoco = array_filter($ucsmiamgwmayyoco); goto ocywegekakimmwcq; okkmcocqokkskasy: $keccaugmemegoimu[$omqquekswieeogws][$uusmaiomayssaecw] = [self::TITLE => ManipulateArray::get($ucsmiamgwmayyoco, self::TITLE, ManipulatePost::qcgakseyaikigqco($suaemuyiacqyugsm)), self::PERMALINK => ManipulatePost::ycqquoiyyuesegsy($suaemuyiacqyugsm)]; goto qiiigwkqeoewsuwm; iwsmmkqaoksmocok: $suaemuyiacqyugsm = ManipulatePost::get($ucsmiamgwmayyoco[self::ITEM]); goto esikeyqyuikmaiek; ocywegekakimmwcq: if (ManipulateArray::uuegkqwagymmusiy($ucsmiamgwmayyoco, [self::KEY, self::ITEM])) { goto gswcoeiisamakwii; } goto emqswoaawgeyosmi; ikqeeaysmqgcgawq: ikuuiauwouuqawuw: goto mscgewkcqcoowweg; emqswoaawgeyosmi: $uusmaiomayssaecw = ManipulateArray::get($ucsmiamgwmayyoco, self::KEY); goto iwsmmkqaoksmocok; esaqcqqwuussiiwo: gswcoeiisamakwii: goto ikqeeaysmqgcgawq; esikeyqyuikmaiek: if (!($suaemuyiacqyugsm && ManipulatePost::ucwmcwqmqwaymkkc($suaemuyiacqyugsm) === "\160\x75\142\154\x69\163\x68")) { goto yoqakewookqoqacm; } goto okkmcocqokkskasy; mscgewkcqcoowweg: } goto gsygwgsiawgmqiyi; gsygwgsiawgmqiyi: uckewycoogsogwiy: goto qsgqwyqaqiowkmco; qsgqwyqaqiowkmco: goto iesekaeqeomeuaui; goto yqagomygmeoecwey; suqcsgaosywaauuu: $omkysikckkcieckq = ManipulateArray::yaeiiwwyckwugsem($omkysikckkcieckq); goto wwukgaquuyoissgy; yqagomygmeoecwey: default: $keccaugmemegoimu[$omqquekswieeogws] = $omkysikckkcieckq; } goto eucqomyqykgoiuge; sqyokemumceysegy: } goto egmayaiikwsskgmy; ucuoeymyqeokgsya: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto yuuyikiacmmueosu; zayqqeqgcwkekwws: $qiouiwasaauyaaue = $amakmumgguksgmum::mywwyegkuymookeg(); goto aueaceeyommgkicu; yuuyikiacmmueosu: } }
