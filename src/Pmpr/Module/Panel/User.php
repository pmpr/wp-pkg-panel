<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62498cbfe16a1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Front\Field\Field; use Pmpr\Common\Foundation\FormMaker\Front\Field\File; use Pmpr\Common\Foundation\FormMaker\Front\Field\Header; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use WP_Error; class User extends Container { const meweoeakkqyiwuyy = "\165\163\x65\162\137\x61\x76\141\x74\x61\x72"; const akoagooquksouwka = "\165\x73\145\x72\137\x65\155\x61\151\154"; const kagqiwogmiguosiw = "\x66\151\162\x73\164\137\156\141\155\x65"; const scagkwwiiquocimc = "\154\141\x73\x74\x5f\156\x61\155\145"; const ccyqsqcgksyckkcm = "\x75\163\x65\x72\137\x75\162\x6c"; const gmyemowoaqyoqwme = "\156\151\143\x6b\x6e\141\155\x65"; const cigcassgekcaiigg = "\137\x76\x65\x72\151\x66\x69\145\144"; const iuwkkyuoyukacwwy = "\156\141\164\x69\x6f\156\x61\154\x5f\143\157\144\145"; const kmyciqicaqsgiwga = "\156\141\x74\x69\x6f\x6e\141\x6c\137\x63\x61\162\x64"; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\147\145\x74\137\x61\166\141\x74\x61\x72\x5f\x64\x61\x74\141", [$this, "\157\161\163\155\171\165\167\x77\x67\x6f\x69\x79\x61\x73\x65\x75"], 999, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x70\x61\x6e\x65\154\137\x75\x73\x65\162\x5f\x67\145\164\x5f\x66\x69\145\x6c\x64\x73"), [$this, "\165\x67\155\143\x65\x63\x63\147\167\x61\x61\141\151\147\151\171"], 10, 2); parent::kgquecmsgcouyaya(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\163\x68\157\x77\137\x75\x73\x65\x72\x5f\160\162\x6f\x66\x69\x6c\x65", [$this, "\x61\x77\x6b\161\x6b\x71\x61\165\x77\167\165\x71\x67\145\x77\165"])->qcsmikeggeemccuu("\145\x64\x69\x74\137\x75\163\x65\162\137\x70\162\x6f\x66\x69\x6c\145", [$this, "\141\x77\x6b\x71\x6b\x71\141\x75\167\x77\x75\x71\x67\145\167\x75"])->qcsmikeggeemccuu("\160\x65\162\163\x6f\x6e\x61\154\137\x6f\x70\164\151\157\x6e\163\x5f\165\160\x64\x61\164\x65", [$this, "\x6d\x73\171\163\x67\x71\145\x65\167\x6b\161\147\x73\x63\167\145"])->qcsmikeggeemccuu("\145\x64\151\164\x5f\x75\x73\x65\x72\137\160\x72\x6f\x66\x69\x6c\x65\x5f\165\x70\144\141\164\145", [$this, "\x6d\163\171\x73\x67\161\145\145\x77\153\161\147\163\x63\x77\145"]); parent::wigskegsqequoeks(); } public function msysgqeewkqgscwe($mkucggyaiaukqoce) { if (!DecoratorUser::scmcyesmmikkucie()) { goto qicwaskssogcokgm; } $megmggkiokqkcwou = $this->ugmceccgwaaaigiy([self::meksegaoamowuwoq => $mkucggyaiaukqoce]); foreach ($megmggkiokqkcwou as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus->iokkueaqiswaewyq()) { goto usquiuuyiyqaeyiu; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea() . self::cigcassgekcaiigg; if (isset($_POST[$aokagokqyuysuksm])) { goto hoeeyiowekaeemko; } $eqgoocgaqwqcimie = 0; goto kymkucucyeoeikim; hoeeyiowekaeemko: $eqgoocgaqwqcimie = 1; kymkucucyeoeikim: ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, $eqgoocgaqwqcimie, $mkucggyaiaukqoce); usquiuuyiyqaeyiu: iekumemscwieugqw: } foeeqckqsyockkak: qicwaskssogcokgm: $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::mgsccwumkcawaqcy => self::kqeokggqcsesmqco]); if (!$ikgwqyuyckaewsow) { goto aegysmeecgcgayyw; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto gaomwagkcciesyqy; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm, ''); $quuosgimaqwocmmk = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm . self::mswocgcucqoaesaa, ''); if (!($aiowsaccomcoikus instanceof File && is_numeric($quuosgimaqwocmmk))) { goto esuiysskoweawsue; } ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm . self::mswocgcucqoaesaa, $quuosgimaqwocmmk, $mkucggyaiaukqoce); esuiysskoweawsue: ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, $eqgoocgaqwqcimie, $mkucggyaiaukqoce); gaomwagkcciesyqy: uqqaiagaeqgqgaiy: } uguigkcmukuouway: aegysmeecgcgayyw: } public function awkqkqauwwuqgewu($mkucggyaiaukqoce) { $uiyqiwmskuuaiayw = []; if (!DecoratorUser::scmcyesmmikkucie()) { goto cgiscsqwwgqqaeqi; } $megmggkiokqkcwou = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce]); foreach ($megmggkiokqkcwou as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto skkamseieeusycye; } if (!$aiowsaccomcoikus->iokkueaqiswaewyq()) { goto wiysogeqqwgioyka; } $omuyquqsuicwkeic = $aiowsaccomcoikus->mwikyscisascoeea() . self::cigcassgekcaiigg; $ieqeegkcmgkmoiyq = MetaBox::wcwmusaouiqaqeww($omuyquqsuicwkeic); $ieqeegkcmgkmoiyq->iygyugseyaqwywyg(ManipulateUser::igawqaomowicuayw($omuyquqsuicwkeic, $mkucggyaiaukqoce)); $uiyqiwmskuuaiayw[] = ["\x69\x64" => $omuyquqsuicwkeic, "\x68\x74\x6d\154" => $ieqeegkcmgkmoiyq->render(), "\166\141\154\x75\145" => sprintf(__("\x56\x61\x6c\165\x65\40\x6f\146\40\45\163\72\x20\45\x73", PR__MDL__PANEL), $aiowsaccomcoikus->uikgwcuascgeissw(), ManipulateHTML::ciuuiyckmsygceis($aiowsaccomcoikus->qooeaookuemoqecm())), "\154\141\142\x65\x6c" => sprintf(__("\x56\x65\x72\151\146\x79\40\45\163", PR__MDL__PANEL), $aiowsaccomcoikus->uikgwcuascgeissw())]; wiysogeqqwgioyka: skkamseieeusycye: soaccwqimeksgwiw: } suqkuqygkkgwyaie: cgiscsqwwgqqaeqi: $yoagueksskqiewiq = []; $gmeiukgosesecyee = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::mgsccwumkcawaqcy => self::kqeokggqcsesmqco]); foreach ($gmeiukgosesecyee as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto cmegwsegsosyqcai; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $ssigsiuwyemcwmys = $this->qackogceeomyqyya($aiowsaccomcoikus); if (!$ssigsiuwyemcwmys) { goto ewymsmkkiksgwysk; } $ssigsiuwyemcwmys->qigsyyqgewgskemg("\167\x2d\155\144\55\65\x30\40\167\55\x6c\x67\x2d\x32\x35"); $ssigsiuwyemcwmys->iygyugseyaqwywyg($aiowsaccomcoikus->qooeaookuemoqecm()); $ssigsiuwyemcwmys->usuqmwksoeaayaig(''); $yoagueksskqiewiq[] = ["\151\x64" => $aokagokqyuysuksm, "\150\x74\155\x6c" => $ssigsiuwyemcwmys->render(), "\x6c\x61\x62\145\x6c" => $aiowsaccomcoikus->uikgwcuascgeissw()]; ewymsmkkiksgwysk: cmegwsegsosyqcai: giaacoqqqsekcayy: } syiqkaasoueowwui: if (!$yoagueksskqiewiq) { goto wmywuusgukmmaams; } echo $this->iuygowkemiiwqmiw("\x70\x72\x6f\x66\x69\x6c\x65", [self::qescuiwgsyuikume => __("\111\156\146\157\162\155\141\x74\151\157\x6e\x20\x56\x65\x72\x69\x66\x69\x63\x61\164\x69\x6f\x6e", PR__MDL__PANEL), self::ymckmcsiymwqucoq => $yoagueksskqiewiq, "\166\x65\162\151\146\151\143\x61\x74\151\x6f\156\163" => $uiyqiwmskuuaiayw]); wmywuusgukmmaams: } public function qackogceeomyqyya($aiowsaccomcoikus) { $sqeykgyoooqysmca = $aiowsaccomcoikus->waecsyqmwascmqoa(self::squoamkioomemiyi); $aiowsaccomcoikus->wmiseqaieauskweu(); $siquossayskcwkea = $aiowsaccomcoikus->sacmkccceuywoqsq() + [self::squoamkioomemiyi => $sqeykgyoooqysmca]; return MetaBox::okmsgamiiemyesao($siquossayskcwkea); } public function aqqaucmcssiayceu() : array { $sogksuscggsicmac = []; $mcgmicqwgaaqqqcw = $this->weysguygiseoukqw(Setting::qaoqekkamwkyqcsi, []); $mcgmicqwgaaqqqcw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\156\145\154\x5f\x75\163\x65\162\x5f\x70\x72\x65\x76\151\145\167\163"), $mcgmicqwgaaqqqcw); if (!$mcgmicqwgaaqqqcw) { goto scisgsyemmsekgos; } $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::wacsysugayaeayag => false]); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if (!($aiowsaccomcoikus instanceof Field && in_array($aokagokqyuysuksm, $mcgmicqwgaaqqqcw))) { goto egyyiccaeeiooaua; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus->uikgwcuascgeissw(); egyyiccaeeiooaua: ooeausyowguqicuo: } gkyawqqcmigqgaiq: scisgsyemmsekgos: return $sogksuscggsicmac; } public function oqsmyuwwgoiyaseu($ywmkwiwkosakssii, $mkucggyaiaukqoce) { $mowgokyeuymuwiew = $this->iqqqmsismuacmaqo($mkucggyaiaukqoce, self::meweoeakkqyiwuyy); if (!$mowgokyeuymuwiew) { goto cewmoqyysgsmuiya; } $ywmkwiwkosakssii[self::auqoykcmsiauccao] = $mowgokyeuymuwiew; cewmoqyysgsmuiya: return $ywmkwiwkosakssii; } public function iqqqmsismuacmaqo($mkucggyaiaukqoce, $uusmaiomayssaecw) { $ogomymegcoacqisg = ManipulateUser::igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce); if (ManipulateValidation::wmcwegoisyeeosqu($ogomymegcoacqisg)) { goto igooksugieceoege; } $ogomymegcoacqisg = $this->quyeyqecsuasocgs(ManipulateUser::igawqaomowicuayw($uusmaiomayssaecw . self::mswocgcucqoaesaa, $mkucggyaiaukqoce)); igooksugieceoege: return $ogomymegcoacqisg; } public function quyeyqecsuasocgs($aiooqyausygaasqm) { $ogomymegcoacqisg = null; if (!$aiooqyausygaasqm) { goto omqiayeucoioqoao; } $ogomymegcoacqisg = ManipulateArray::get(ManipulateAttachment::uikkssqcoewckces((int) $aiooqyausygaasqm), 0); omqiayeucoioqoao: return $ogomymegcoacqisg; } public function uwucmiyokwcakwga($mkucggyaiaukqoce, $icwicymcioeyeyek, $ikgwqyuyckaewsow = []) { $sogksuscggsicmac = $this->muukeaaskkiceykc($icwicymcioeyeyek, $ikgwqyuyckaewsow); if (!(!is_wp_error($sogksuscggsicmac) && $sogksuscggsicmac)) { goto wagqgeqymeqoeuyi; } $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $ecukkacusqswqoem = false; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto eeauyscekuckoues; } if (!(!$aiowsaccomcoikus->iokkueaqiswaewyq() || !$aiowsaccomcoikus->wowamsaiqwikqoqa())) { goto mwsmsguqqkcwiiuk; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $euwkouuykmaieusi = ManipulateArray::get($icwicymcioeyeyek, $aokagokqyuysuksm); try { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x70\x61\156\145\x6c\137\165\163\145\x72\137\x73\141\166\x65\137\x66\151\x65\x6c\144"), $aiowsaccomcoikus, $euwkouuykmaieusi); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\160\x61\156\145\x6c\137\x75\x73\145\x72\x5f\163\141\166\145\x5f\146\151\x65\154\x64\x5f{$aokagokqyuysuksm}"), $euwkouuykmaieusi, $aiowsaccomcoikus); switch ($aokagokqyuysuksm) { case self::meweoeakkqyiwuyy: case self::kmyciqicaqsgiwga: if (ManipulateValidation::wmcwegoisyeeosqu($euwkouuykmaieusi)) { goto wakmayaoqoskekqy; } $aiooqyausygaasqm = ManipulateFile::lausiwamsokkqguo($euwkouuykmaieusi); if (!is_wp_error($aiooqyausygaasqm)) { goto sggawugoykqcmsug; } $sogksuscggsicmac[self::imkacwmiuiykyuim] = $aiooqyausygaasqm->get_error_message(); goto wkeuuycukmuqiaom; sggawugoykqcmsug: $ogomymegcoacqisg = $this->quyeyqecsuasocgs($aiooqyausygaasqm); ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, $ogomymegcoacqisg, $ycoeoaakqyskgykq); ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm . self::mswocgcucqoaesaa, $aiooqyausygaasqm, $ycoeoaakqyskgykq); $ecukkacusqswqoem = true; wkeuuycukmuqiaom: wakmayaoqoskekqy: goto kqgcyoscsusgoaqi; case self::ccyqsqcgksyckkcm: case self::gmyemowoaqyoqwme: case self::scagkwwiiquocimc: case self::kagqiwogmiguosiw: case self::akoagooquksouwka: $mkucggyaiaukqoce->{$aokagokqyuysuksm} = esc_sql($euwkouuykmaieusi); $ecukkacusqswqoem = true; goto kqgcyoscsusgoaqi; default: if ($aokagokqyuysuksm === self::iuwkkyuoyukacwwy && !ManipulateValidation::iuceiykuqcqkwsoa($euwkouuykmaieusi)) { goto qmuwoecuacmkwgem; } ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, esc_attr($euwkouuykmaieusi), $ycoeoaakqyskgykq); goto owmuceyswmgueasi; qmuwoecuacmkwgem: $this->yqkwsouguwgoywcw(sprintf(__("\x25\163\x20\151\163\x20\x6e\157\x74\x20\x61\40\x76\141\x6c\x69\x64\x20\45\163", PR__MDL__PANEL), $euwkouuykmaieusi, $aiowsaccomcoikus->uikgwcuascgeissw())); owmuceyswmgueasi: goto kqgcyoscsusgoaqi; } ueigkucgaucgeimc: kqgcyoscsusgoaqi: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf("\x25\163\74\142\x72\x3e\45\x73", __("\x66\x61\x69\154\145\x64\x20\165\160\x64\141\x74\145\40\160\x72\157\x66\x69\154\145\72", PR__MDL__PANEL), $this->kyacickkomkioeyu($wgaoewqkwgomoaai)), 400); } mwsmsguqqkcwiiuk: eeauyscekuckoues: wgewmqieuamsoayy: } ugqaaewwmkocwwgy: if ($ecukkacusqswqoem) { goto eogwckcymuugikuy; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x54\x68\145\162\145\x20\151\x73\x20\x6e\157\164\150\151\156\x67\x20\x66\x6f\x72\x20\165\160\144\141\164\x65", PR__MDL__PANEL), 400); goto msemumccgceyugmg; eogwckcymuugikuy: DecoratorUser::update($mkucggyaiaukqoce); msemumccgceyugmg: wagqgeqymeqoeuyi: return $sogksuscggsicmac; } public function muukeaaskkiceykc($eyagkkkqkwcuygso, $ikgwqyuyckaewsow) { $sogksuscggsicmac = true; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto mugqyyeayeyggqqk; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $euwkouuykmaieusi = ManipulateArray::get($eyagkkkqkwcuygso, $aokagokqyuysuksm); if (!$euwkouuykmaieusi && $aiowsaccomcoikus->msmiagueogcsucgc()) { goto emmsycooskoqmgeg; } $sogksuscggsicmac = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x61\x6e\x65\x6c\x5f\160\x72\157\146\151\154\145\x5f\x76\141\x6c\x69\144\x61\x74\x69\x6f\x6e\x5f\151\x6e\160\165\x74"), true, $aiowsaccomcoikus, $euwkouuykmaieusi); if (!(!is_wp_error($sogksuscggsicmac) && $sogksuscggsicmac)) { goto qgeugwymkkiacwoc; } switch ($aokagokqyuysuksm) { case self::ccyqsqcgksyckkcm: if (ManipulateValidation::wmcwegoisyeeosqu($euwkouuykmaieusi)) { goto ciykoyeioqgyaeqo; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x54\x68\145\x20\125\162\x6c\40\171\x6f\x75\40\145\156\164\145\x72\x65\x64\x20\x69\163\x20\x6e\157\164\x20\166\x61\x6c\x69\x64", PR__MDL__PANEL), 400); ciykoyeioqgyaeqo: goto wcugqegqsuuuwqao; case self::akoagooquksouwka: if (ManipulateValidation::qkgmsqgmwoamekyk($euwkouuykmaieusi)) { goto mqicocmqegwukkwg; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x54\150\x65\x20\105\155\141\151\154\40\171\x6f\x75\x20\x65\x6e\164\145\x72\145\x64\x20\x69\x73\x20\x6e\x6f\164\x20\166\141\154\151\x64", PR__MDL__PANEL), 400); mqicocmqegwukkwg: goto wcugqegqsuuuwqao; } asiqwuoswmigcaki: wcugqegqsuuuwqao: qgeugwymkkiacwoc: goto ouamogymawucwswu; emmsycooskoqmgeg: $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf(__("\x25\163\40\151\163\x20\141\40\162\x65\161\x75\x69\162\x65\40\x66\151\145\x6c\144", PR__MDL__PANEL), $aiowsaccomcoikus->uikgwcuascgeissw()), 400); goto qoqskyuuwueqkquk; ouamogymawucwswu: mugqyyeayeyggqqk: iwsuawwqomaowuii: } qoqskyuuwueqkquk: return $sogksuscggsicmac; } public function ugmceccgwaaaigiy($ikgwqyuyckaewsow = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [ self::meksegaoamowuwoq => null, self::aisguagukaewucii => self::ckmqoekmugkggeym, self::mgsccwumkcawaqcy => self::ALL, self::ackcaikowcokggsc => [], self::wacsysugayaeayag => true, ]); switch ($ywmkwiwkosakssii[self::mgsccwumkcawaqcy]) { case self::kqeokggqcsesmqco: $ikgwqyuyckaewsow = $this->cgaksokgcmycgmeo(); goto acsqgiuageaasiyy; case self::ALL: default: $ikgwqyuyckaewsow = array_merge($this->ibaymmaeyoceumgw(), $this->cgaksokgcmycgmeo()); goto acsqgiuageaasiyy; } oomguqikqokqwgku: acsqgiuageaasiyy: $mkucggyaiaukqoce = $ywmkwiwkosakssii[self::meksegaoamowuwoq]; $ikgwqyuyckaewsow = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\x61\x6e\x65\154\x5f\x70\162\x6f\146\x69\154\145\x5f\160\x65\162\163\157\156\141\x6c\x5f\146\151\145\x6c\x64\x73"), $ikgwqyuyckaewsow, $mkucggyaiaukqoce); $kmogksmigykusaem = $ywmkwiwkosakssii[self::wacsysugayaeayag]; $okaqsamoiqqumygk = []; $yyeuwosgwymeocco = []; $gcygmsqykaykyyim = []; if (!$kmogksmigykusaem) { goto samwkqgwouggsguc; } $okaqsamoiqqumygk = $this->weysguygiseoukqw(Setting::gyogiiwkqowygoes, $okaqsamoiqqumygk); $yyeuwosgwymeocco = $this->weysguygiseoukqw(Setting::kioockukciugewka, $yyeuwosgwymeocco); $gcygmsqykaykyyim = $this->weysguygiseoukqw(Setting::sweqwcsqywoaomyg, $gcygmsqykaykyyim); samwkqgwouggsguc: $sogksuscggsicmac = []; $ooiewiwkegguusum = $ywmkwiwkosakssii[self::ackcaikowcokggsc]; $kwcqeacwucqmwmcw = null; $gsyeosaccwkauuyu = []; foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto iikiiioqiyegyaak; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $muocgugcqiewywag = true; if (!(!$ooiewiwkegguusum || in_array($aokagokqyuysuksm, $ooiewiwkegguusum))) { goto gicyayswqyuoekcq; } switch ($ywmkwiwkosakssii[self::aisguagukaewucii]) { case self::ckmqoekmugkggeym: if (!$kmogksmigykusaem) { goto ykomgumacooyomsk; } if (in_array($aokagokqyuysuksm, $yyeuwosgwymeocco)) { goto aomysykcgikegiau; } if ($aiowsaccomcoikus instanceof Header) { goto ikqqskkqqwmwssoo; } $gsyeosaccwkauuyu[$aokagokqyuysuksm] = $momcykaoccoymeig; if (!in_array($aokagokqyuysuksm, $okaqsamoiqqumygk)) { goto kqqiegkuqagcqsya; } $aiowsaccomcoikus->eumecwmqmukqgyea(); kqqiegkuqagcqsya: if (!in_array($aokagokqyuysuksm, $gcygmsqykaykyyim)) { goto ogsaaqsaogcqiouy; } $aiowsaccomcoikus->uqiyecacqiyeaqqo(); if (!ManipulateUser::igawqaomowicuayw($aokagokqyuysuksm . self::cigcassgekcaiigg, $mkucggyaiaukqoce)) { goto ousiuuwgwkiyikyq; } $aiowsaccomcoikus->cekywgkuyuckekeg(); ousiuuwgwkiyikyq: ogsaaqsaogcqiouy: if (!$mkucggyaiaukqoce) { goto iwekmyyccgiyuecc; } $aiowsaccomcoikus->iygyugseyaqwywyg($this->ocoqmuuikmocsqqu($mkucggyaiaukqoce, $aokagokqyuysuksm)); iwekmyyccgiyuecc: ikqqskkqqwmwssoo: goto cwwmimggaaecmucw; aomysykcgikegiau: $muocgugcqiewywag = false; cwwmimggaaecmucw: if (!$aiowsaccomcoikus instanceof Header) { goto ogqmesokykywseys; } if (!(isset($sogksuscggsicmac[$kwcqeacwucqmwmcw]) && !$gsyeosaccwkauuyu)) { goto awoaooyoeoyeeqee; } unset($sogksuscggsicmac[$kwcqeacwucqmwmcw]); awoaooyoeoyeeqee: $gsyeosaccwkauuyu = []; $kwcqeacwucqmwmcw = $momcykaoccoymeig; ogqmesokykywseys: ykomgumacooyomsk: if (!$muocgugcqiewywag) { goto mqkmcysgoiaouiwm; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus; mqkmcysgoiaouiwm: goto kkumywowcoycymeo; case self::emgcgiseaoouacge: default: if ($aiowsaccomcoikus instanceof Header) { goto kosaqwikueyksqmw; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus->uikgwcuascgeissw(); kosaqwikueyksqmw: goto kkumywowcoycymeo; } miweggwqeiaeweia: kkumywowcoycymeo: gicyayswqyuoekcq: iikiiioqiyegyaak: guykyqecgswcsmws: } wyuemgggaqogsmsq: if (!($kmogksmigykusaem && !$gsyeosaccwkauuyu && isset($sogksuscggsicmac[$kwcqeacwucqmwmcw]))) { goto uiosisocuwokwkie; } unset($sogksuscggsicmac[$kwcqeacwucqmwmcw]); uiosisocuwokwkie: return $sogksuscggsicmac; } public function ibaymmaeyoceumgw() : array { return [Form::wowyaacgaccyeici(__("\x55\163\145\162\x20\111\156\x66\157", PR__MDL__PANEL)), Form::kimoeccokowuaiic(self::meweoeakkqyiwuyy, __("\101\166\141\x74\141\162", PR__MDL__PANEL), sprintf(__("\x41\x63\x63\145\x70\x74\145\x64\40\x66\151\154\145\x74\x79\160\145\x73\x20\151\x73\x20\x25\163", PR__MDL__PANEL), "\x2e\x70\156\147\x2c\x20\56\x6a\160\x67\x2c\x20\x2e\x6a\x70\145\147"))->scmsukieucuekmki(), Form::ymuegqgyuagyucws(self::kagqiwogmiguosiw, __("\106\x69\162\x73\164\40\x4e\141\x6d\x65", PR__MDL__PANEL))->eumecwmqmukqgyea(), Form::ymuegqgyuagyucws(self::scagkwwiiquocimc, __("\x4c\x61\163\164\x20\x4e\x61\x6d\145", PR__MDL__PANEL))->eumecwmqmukqgyea(), Form::ymuegqgyuagyucws(self::gmyemowoaqyoqwme, __("\x4e\x69\x63\153\x20\x4e\141\x6d\145", PR__MDL__PANEL))->eumecwmqmukqgyea(), Form::wowyaacgaccyeici(__("\103\x6f\x6e\x74\141\x63\164\40\111\156\x66\x6f", PR__MDL__PANEL)), Form::ymuegqgyuagyucws(self::akoagooquksouwka, __("\103\157\x6e\164\x61\143\x74\x20\105\155\141\151\154", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::uqmywyokmkwwmuic)->ccmwycqioaicegoc(__("\127\x65\x27\154\154\x20\156\x65\x76\x65\x72\x20\163\150\x61\x72\x65\x20\x79\157\x75\x72\x20\x65\x6d\141\151\x6c\x20\x77\x69\164\150\x20\141\156\171\157\156\x65\x20\x65\x6c\x73\145\x2e", PR__MDL__PANEL))->mkiaygiogeeyogqm(false), Form::ymuegqgyuagyucws(self::ccyqsqcgksyckkcm, __("\x57\145\x62\x73\151\164\145", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::yakumqwueukksgcm)->xkgcwkwsqysqamic()]; } public function cgaksokgcmycgmeo() : array { $ikgwqyuyckaewsow = [Form::wowyaacgaccyeici(__("\126\145\x72\151\146\x69\143\141\164\151\x6f\x6e\x20\x49\156\146\x6f\162\155\x61\x74\x69\x6f\156", PR__MDL__PANEL)), Form::ymuegqgyuagyucws(self::iuwkkyuoyukacwwy, __("\116\141\x74\x69\157\x6e\141\x6c\40\x43\x6f\144\145", PR__MDL__PANEL))->igmaewykumgwoaoy("\x6d\x61\x78\x6c\x65\x6e\147\x74\150", 10)->sqcsseccsaqsoyqy()->suaookwiwycuwmuk("\x6e\x61\x74\x69\x6f\156\x61\154\55\143\157\144\145"), Form::kimoeccokowuaiic(self::kmyciqicaqsgiwga, __("\x4e\x61\164\x69\x6f\x6e\x61\x6c\x20\x43\x61\162\x64", PR__MDL__PANEL), __("\120\154\145\x61\x73\145\40\x75\160\154\157\x61\x64\x20\x79\157\165\162\x20\156\x61\x74\x69\157\156\141\x6c\40\143\141\x72\x64\40\x69\155\x61\147\145", PR__MDL__PANEL))->qcgocuceocquqcuw("\x61\x63\x63\145\160\x74", "\56\152\160\x67\x2c\40\x2e\x70\x6e\x67")]; return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\156\x65\154\x5f\165\x73\x65\x72\137\x63\165\163\164\157\x6d\137\x66\151\x65\154\x64\x73"), $ikgwqyuyckaewsow); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $yyimiwcuegayoskq = []; $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::wacsysugayaeayag => false]); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto qmkaeeomgkwggoyo; } $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea(); $yyimiwcuegayoskq[$uusmaiomayssaecw] = $this->ocoqmuuikmocsqqu($mkucggyaiaukqoce, $uusmaiomayssaecw); qmkaeeomgkwggoyo: gcckqucukawcasgk: } cuumeogeomowqisc: return $yyimiwcuegayoskq; } private function ocoqmuuikmocsqqu($mkucggyaiaukqoce, $uusmaiomayssaecw) { if (in_array($uusmaiomayssaecw, [self::meweoeakkqyiwuyy, self::kmyciqicaqsgiwga])) { goto eekcoeikaeaaeyii; } if (isset($mkucggyaiaukqoce->{$uusmaiomayssaecw})) { goto csammceowmqwaamq; } $eqgoocgaqwqcimie = ManipulateUser::igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce); goto ocaguquugeamqckq; csammceowmqwaamq: $eqgoocgaqwqcimie = $mkucggyaiaukqoce->{$uusmaiomayssaecw}; ocaguquugeamqckq: goto cogywoqcqummsyus; eekcoeikaeaaeyii: $eqgoocgaqwqcimie = $this->iqqqmsismuacmaqo($mkucggyaiaukqoce, $uusmaiomayssaecw); cogywoqcqummsyus: return $eqgoocgaqwqcimie; } }
