<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63281ac6dbdf5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Front\Field\Field; use Pmpr\Common\Foundation\FormMaker\Front\Field\File; use Pmpr\Common\Foundation\FormMaker\Front\Field\Header; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use WP_Error; use WP_User; class User extends Container { const uymswsomcyoqsegc = "\160\x68\x6f\156\145\137\156\165\x6d\142\x65\x72"; const meweoeakkqyiwuyy = "\x75\x73\145\x72\137\x61\166\x61\x74\141\x72"; const akoagooquksouwka = "\x75\163\x65\162\137\x65\x6d\x61\x69\x6c"; const kagqiwogmiguosiw = "\146\151\x72\x73\x74\x5f\x6e\141\155\x65"; const scagkwwiiquocimc = "\x6c\x61\x73\x74\137\156\x61\x6d\145"; const ccyqsqcgksyckkcm = "\165\163\145\x72\137\165\x72\x6c"; const gmyemowoaqyoqwme = "\156\151\143\x6b\156\141\x6d\x65"; const cigcassgekcaiigg = "\137\166\145\162\151\146\x69\x65\144"; const iuwkkyuoyukacwwy = "\156\141\x74\x69\157\x6e\x61\x6c\137\x63\157\x64\145"; const kmyciqicaqsgiwga = "\156\141\164\x69\157\x6e\x61\x6c\137\143\x61\162\144"; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\145\164\x5f\141\166\x61\164\x61\x72\137\144\141\x74\141", [$this, "\x6f\x71\163\x6d\x79\x75\x77\167\147\x6f\x69\171\x61\163\145\x75"], 999, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x70\141\x6e\145\x6c\137\x75\163\145\162\x5f\x67\145\x74\137\x66\151\x65\x6c\144\x73"), [$this, "\x75\147\x6d\x63\x65\143\x63\x67\x77\141\141\x61\151\x67\x69\x79"], 10, 2); parent::kgquecmsgcouyaya(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x73\150\x6f\167\x5f\165\x73\x65\162\x5f\x70\162\x6f\x66\x69\154\x65", [$this, "\141\x77\153\x71\153\161\141\165\167\167\165\x71\147\x65\167\165"])->qcsmikeggeemccuu("\x65\144\151\164\137\x75\x73\x65\x72\x5f\160\162\x6f\146\151\x6c\x65", [$this, "\x61\x77\x6b\x71\x6b\x71\141\x75\x77\167\x75\161\147\x65\167\x75"])->qcsmikeggeemccuu("\160\x65\162\x73\x6f\x6e\141\154\137\x6f\160\164\151\x6f\156\163\137\x75\x70\x64\x61\164\145", [$this, "\x6d\x73\x79\163\x67\x71\x65\x65\167\x6b\x71\147\163\x63\167\x65"])->qcsmikeggeemccuu("\145\x64\x69\164\137\165\x73\145\162\137\160\x72\157\146\x69\154\x65\x5f\165\x70\144\x61\164\145", [$this, "\155\x73\171\163\147\161\145\145\x77\x6b\161\x67\x73\x63\x77\145"]); parent::wigskegsqequoeks(); } public function msysgqeewkqgscwe($mkucggyaiaukqoce) { if (!DecoratorUser::scmcyesmmikkucie()) { goto iwekmyyccgiyuecc; } $megmggkiokqkcwou = $this->ugmceccgwaaaigiy([self::meksegaoamowuwoq => $mkucggyaiaukqoce]); foreach ($megmggkiokqkcwou as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus->iokkueaqiswaewyq()) { goto ogsaaqsaogcqiouy; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea() . self::cigcassgekcaiigg; if (isset($_POST[$aokagokqyuysuksm])) { goto kqqiegkuqagcqsya; } $eqgoocgaqwqcimie = 0; goto ousiuuwgwkiyikyq; kqqiegkuqagcqsya: $eqgoocgaqwqcimie = 1; ousiuuwgwkiyikyq: ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, $eqgoocgaqwqcimie, $mkucggyaiaukqoce); ogsaaqsaogcqiouy: miweggwqeiaeweia: } kkumywowcoycymeo: iwekmyyccgiyuecc: $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::mgsccwumkcawaqcy => self::kqeokggqcsesmqco]); if (!$ikgwqyuyckaewsow) { goto ogqmesokykywseys; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto awoaooyoeoyeeqee; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm, ''); $quuosgimaqwocmmk = ManipulateServer::ayueggmoqeeukqmq($aokagokqyuysuksm . self::mswocgcucqoaesaa, ''); if (!($aiowsaccomcoikus instanceof File && is_numeric($quuosgimaqwocmmk))) { goto cwwmimggaaecmucw; } ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm . self::mswocgcucqoaesaa, $quuosgimaqwocmmk, $mkucggyaiaukqoce); cwwmimggaaecmucw: ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, $eqgoocgaqwqcimie, $mkucggyaiaukqoce); awoaooyoeoyeeqee: aomysykcgikegiau: } ikqqskkqqwmwssoo: ogqmesokykywseys: } public function awkqkqauwwuqgewu($mkucggyaiaukqoce) { $uiyqiwmskuuaiayw = []; if (!DecoratorUser::scmcyesmmikkucie()) { goto cuumeogeomowqisc; } $megmggkiokqkcwou = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce]); foreach ($megmggkiokqkcwou as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto uiosisocuwokwkie; } if (!$aiowsaccomcoikus->iokkueaqiswaewyq()) { goto iikiiioqiyegyaak; } $omuyquqsuicwkeic = $aiowsaccomcoikus->mwikyscisascoeea() . self::cigcassgekcaiigg; $ieqeegkcmgkmoiyq = MetaBox::wcwmusaouiqaqeww($omuyquqsuicwkeic); $ieqeegkcmgkmoiyq->iygyugseyaqwywyg(ManipulateUser::igawqaomowicuayw($omuyquqsuicwkeic, $mkucggyaiaukqoce) ? "\x6f\x6e" : "\157\x66\146"); $eqgoocgaqwqcimie = $aiowsaccomcoikus->qooeaookuemoqecm(); $wwgucssaecqekuek = ["\143\154\x61\163\x73" => "\x6d\x74\x2d\x32"]; if ($aiowsaccomcoikus instanceof File) { goto kosaqwikueyksqmw; } $eqgoocgaqwqcimie = ManipulateHTML::ciuuiyckmsygceis($eqgoocgaqwqcimie, $wwgucssaecqekuek); goto gicyayswqyuoekcq; kosaqwikueyksqmw: $wwgucssaecqekuek["\x73\x72\143"] = $eqgoocgaqwqcimie; $wwgucssaecqekuek[self::qomookamaskuoswk] = 120; $wwgucssaecqekuek = ManipulateHTML::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\141\x73\x73", "\151\x6d\147\x2d\146\154\165\x69\x64"); $mcqieaigyeeyaksm = ManipulateHTML::qgsekwygcgawekeq("\x69\155\147", $wwgucssaecqekuek); $eqgoocgaqwqcimie = ManipulateHTML::yuawgssgauywkiia($mcqieaigyeeyaksm, $eqgoocgaqwqcimie, ["\x74\x61\x72\x67\x65\x74" => "\x5f\x62\x6c\x61\x6e\x6b"]); gicyayswqyuoekcq: $uiyqiwmskuuaiayw[] = [self::gouqcwikiiygyasc => $omuyquqsuicwkeic, self::gsqoooskigukokks => $ieqeegkcmgkmoiyq->render(), self::ciyoccqkiamemcmm => sprintf(__("\126\x61\x6c\x75\145\40\157\146\40\45\x73\x3a\40\45\163", PR__MDL__PANEL), $aiowsaccomcoikus->uikgwcuascgeissw(), $eqgoocgaqwqcimie), self::uissasisiuymwsmu => sprintf(__("\x56\x65\162\151\x66\171\x20\45\163", PR__MDL__PANEL), $aiowsaccomcoikus->uikgwcuascgeissw())]; iikiiioqiyegyaak: uiosisocuwokwkie: mqkmcysgoiaouiwm: } ykomgumacooyomsk: cuumeogeomowqisc: $yoagueksskqiewiq = []; $gmeiukgosesecyee = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::mgsccwumkcawaqcy => self::kqeokggqcsesmqco]); foreach ($gmeiukgosesecyee as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto ocaguquugeamqckq; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $ssigsiuwyemcwmys = $this->qackogceeomyqyya($aiowsaccomcoikus); if (!$ssigsiuwyemcwmys) { goto csammceowmqwaamq; } $ssigsiuwyemcwmys->qigsyyqgewgskemg("\x77\x2d\155\144\x2d\x35\x30\40\x77\55\154\x67\55\x32\x35"); $ssigsiuwyemcwmys->iygyugseyaqwywyg($aiowsaccomcoikus->qooeaookuemoqecm()); $ssigsiuwyemcwmys->usuqmwksoeaayaig(''); $yoagueksskqiewiq[] = [self::gouqcwikiiygyasc => $aokagokqyuysuksm, self::gsqoooskigukokks => $ssigsiuwyemcwmys->render(), self::uissasisiuymwsmu => $aiowsaccomcoikus->uikgwcuascgeissw()]; csammceowmqwaamq: ocaguquugeamqckq: qmkaeeomgkwggoyo: } gcckqucukawcasgk: if (!$yoagueksskqiewiq) { goto eekcoeikaeaaeyii; } echo $this->iuygowkemiiwqmiw("\160\162\x6f\146\151\x6c\145", [self::qescuiwgsyuikume => __("\111\x6e\146\x6f\x72\x6d\141\x74\x69\157\x6e\x20\x56\145\162\x69\146\x69\143\x61\x74\x69\x6f\156", PR__MDL__PANEL), self::ymckmcsiymwqucoq => $yoagueksskqiewiq, "\x76\145\162\x69\x66\x69\x63\x61\164\151\157\x6e\163" => $uiyqiwmskuuaiayw, "\x76\145\162\151\146\151\143\x61\164\151\x6f\156\163\x5f\164\x69\164\154\145" => __("\x56\x65\x72\151\146\x69\141\142\x6c\145\40\x66\151\145\154\144\x73", PR__MDL__PANEL)]); eekcoeikaeaaeyii: } public function qackogceeomyqyya($aiowsaccomcoikus) { $sqeykgyoooqysmca = $aiowsaccomcoikus->waecsyqmwascmqoa(self::squoamkioomemiyi); $aiowsaccomcoikus->wmiseqaieauskweu(); $siquossayskcwkea = $aiowsaccomcoikus->sacmkccceuywoqsq() + [self::squoamkioomemiyi => $sqeykgyoooqysmca]; return MetaBox::okmsgamiiemyesao($siquossayskcwkea); } public function aqqaucmcssiayceu() : array { $sogksuscggsicmac = []; $mcgmicqwgaaqqqcw = $this->weysguygiseoukqw(Setting::qaoqekkamwkyqcsi, []); $mcgmicqwgaaqqqcw = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\x6e\145\154\137\x75\163\x65\x72\x5f\x70\162\x65\x76\x69\x65\x77\x73"), $mcgmicqwgaaqqqcw); if (!$mcgmicqwgaaqqqcw) { goto uaukmuiwskcemcsw; } $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::wacsysugayaeayag => false]); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); if (!($aiowsaccomcoikus instanceof Field && in_array($aokagokqyuysuksm, $mcgmicqwgaaqqqcw, true))) { goto ugqwuugsweqgmywk; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus->uikgwcuascgeissw(); ugqwuugsweqgmywk: gmwykkouysyaqwqm: } cogywoqcqummsyus: uaukmuiwskcemcsw: return $sogksuscggsicmac; } public function oqsmyuwwgoiyaseu($ywmkwiwkosakssii, $sqwmoeogqwooeukc) { $mkucggyaiaukqoce = ManipulateUser::mikwgiscckkeomia($sqwmoeogqwooeukc); if (!(ManipulateUser::is($mkucggyaiaukqoce) && ($mowgokyeuymuwiew = $this->iqqqmsismuacmaqo($sqwmoeogqwooeukc, self::meweoeakkqyiwuyy)))) { goto sockeswygwcskeuq; } $ywmkwiwkosakssii[self::auqoykcmsiauccao] = $mowgokyeuymuwiew; sockeswygwcskeuq: return $ywmkwiwkosakssii; } public function iqqqmsismuacmaqo($mkucggyaiaukqoce, $uusmaiomayssaecw) { $ogomymegcoacqisg = ManipulateUser::igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce); if (ManipulateValidation::wmcwegoisyeeosqu($ogomymegcoacqisg)) { goto mkwkkmkgiqiamacc; } $ogomymegcoacqisg = $this->quyeyqecsuasocgs(ManipulateUser::igawqaomowicuayw($uusmaiomayssaecw . self::mswocgcucqoaesaa, $mkucggyaiaukqoce)); mkwkkmkgiqiamacc: return $ogomymegcoacqisg; } public function quyeyqecsuasocgs($aiooqyausygaasqm) { $ogomymegcoacqisg = null; if (!$aiooqyausygaasqm) { goto uaqackioaiqwcocy; } $ogomymegcoacqisg = ManipulateArray::get(ManipulateAttachment::uikkssqcoewckces((int) $aiooqyausygaasqm), 0); uaqackioaiqwcocy: return $ogomymegcoacqisg; } public function uwucmiyokwcakwga($mkucggyaiaukqoce, $icwicymcioeyeyek, $ikgwqyuyckaewsow = []) { $sogksuscggsicmac = $this->muukeaaskkiceykc($icwicymcioeyeyek, $ikgwqyuyckaewsow); if (!(!is_wp_error($sogksuscggsicmac) && $sogksuscggsicmac)) { goto gygwewcqsmwqismo; } $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); $ecukkacusqswqoem = false; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto ukkcmocamwgiqayu; } if (!(!$aiowsaccomcoikus->iokkueaqiswaewyq() || !$aiowsaccomcoikus->wowamsaiqwikqoqa())) { goto iiiccouaaqsyikae; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $euwkouuykmaieusi = ManipulateArray::get($icwicymcioeyeyek, $aokagokqyuysuksm); try { $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x70\141\x6e\145\x6c\137\165\x73\x65\162\x5f\x73\141\x76\x65\137\x66\151\x65\x6c\144"), $aiowsaccomcoikus, $euwkouuykmaieusi); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\x70\141\156\145\x6c\x5f\165\163\145\162\137\x73\x61\166\x65\137\146\x69\x65\x6c\x64\x5f{$aokagokqyuysuksm}"), $euwkouuykmaieusi, $aiowsaccomcoikus); switch ($aokagokqyuysuksm) { case self::meweoeakkqyiwuyy: case self::kmyciqicaqsgiwga: if (ManipulateValidation::wmcwegoisyeeosqu($euwkouuykmaieusi)) { goto ewscugeuicukkycc; } $aiooqyausygaasqm = ManipulateFile::lausiwamsokkqguo($euwkouuykmaieusi); if (!is_wp_error($aiooqyausygaasqm)) { goto cgyakcqgugqgkqiw; } $sogksuscggsicmac[self::imkacwmiuiykyuim] = $aiooqyausygaasqm->get_error_message(); goto eeyyskqsmquyquqw; cgyakcqgugqgkqiw: $ogomymegcoacqisg = $this->quyeyqecsuasocgs($aiooqyausygaasqm); ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, $ogomymegcoacqisg, $ycoeoaakqyskgykq); ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm . self::mswocgcucqoaesaa, $aiooqyausygaasqm, $ycoeoaakqyskgykq); $ecukkacusqswqoem = true; eeyyskqsmquyquqw: ewscugeuicukkycc: goto mggeqkcksyaymcsa; case self::ccyqsqcgksyckkcm: case self::gmyemowoaqyoqwme: case self::scagkwwiiquocimc: case self::kagqiwogmiguosiw: case self::akoagooquksouwka: $mkucggyaiaukqoce->{$aokagokqyuysuksm} = esc_sql($euwkouuykmaieusi); $ecukkacusqswqoem = true; goto mggeqkcksyaymcsa; default: if ($aokagokqyuysuksm === self::iuwkkyuoyukacwwy && !ManipulateValidation::iuceiykuqcqkwsoa($euwkouuykmaieusi) || $aokagokqyuysuksm === self::uymswsomcyoqsegc && !ManipulateValidation::ggkeeqsuoskqeimq($euwkouuykmaieusi)) { goto kqswcsysqawkcgye; } ManipulateUser::ksmqawcowkmegigw($aokagokqyuysuksm, esc_attr($euwkouuykmaieusi), $ycoeoaakqyskgykq); goto wusciwkkckmqigms; kqswcsysqawkcgye: $this->yqkwsouguwgoywcw(sprintf(__("\x25\163\x20\151\163\x20\156\157\x74\40\x61\40\166\x61\154\x69\x64\40\x25\163", PR__MDL__PANEL), $euwkouuykmaieusi, $aiowsaccomcoikus->uikgwcuascgeissw())); wusciwkkckmqigms: goto mggeqkcksyaymcsa; } uegouoiuyoqkcscg: mggeqkcksyaymcsa: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf("\45\x73\74\142\x72\x3e\x25\x73", __("\x66\x61\151\154\x65\144\x20\165\x70\x64\x61\x74\145\40\x70\x72\x6f\x66\x69\154\x65\72", PR__MDL__PANEL), $this->kyacickkomkioeyu($wgaoewqkwgomoaai)), 400); } iiiccouaaqsyikae: ukkcmocamwgiqayu: isgwkwacoyimiauk: } cscusseysqygsoiy: if ($ecukkacusqswqoem) { goto mwysseaekcsiesmm; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x54\x68\x65\162\145\40\151\x73\40\156\157\x74\x68\151\x6e\147\40\146\x6f\162\40\165\160\144\x61\164\145", PR__MDL__PANEL), 400); goto amgsueumgaguceaa; mwysseaekcsiesmm: DecoratorUser::update($mkucggyaiaukqoce); amgsueumgaguceaa: gygwewcqsmwqismo: return $sogksuscggsicmac; } public function muukeaaskkiceykc($eyagkkkqkwcuygso, $ikgwqyuyckaewsow) { $sogksuscggsicmac = true; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto qukocuwgakemmyga; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $euwkouuykmaieusi = ManipulateArray::get($eyagkkkqkwcuygso, $aokagokqyuysuksm); if (!$euwkouuykmaieusi && $aiowsaccomcoikus->msmiagueogcsucgc()) { goto kocqqoyymosmuksu; } $sogksuscggsicmac = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\141\156\x65\x6c\137\x70\x72\157\146\x69\x6c\145\x5f\166\141\154\151\x64\x61\164\x69\x6f\156\137\x69\156\x70\x75\x74"), true, $aiowsaccomcoikus, $euwkouuykmaieusi); if (!(!is_wp_error($sogksuscggsicmac) && $sogksuscggsicmac)) { goto iuuuususuuuaieem; } switch ($aokagokqyuysuksm) { case self::ccyqsqcgksyckkcm: if (ManipulateValidation::wmcwegoisyeeosqu($euwkouuykmaieusi)) { goto uykousayyomcaeaa; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x54\x68\x65\40\x55\162\x6c\x20\171\157\x75\40\x65\156\164\145\162\x65\x64\40\x69\x73\x20\156\157\x74\x20\x76\x61\x6c\x69\x64", PR__MDL__PANEL), 400); uykousayyomcaeaa: goto ukqocwewouckikso; case self::akoagooquksouwka: if (ManipulateValidation::qkgmsqgmwoamekyk($euwkouuykmaieusi)) { goto uimeeckqksqeekqq; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x54\x68\x65\40\105\x6d\141\x69\x6c\x20\x79\157\x75\x20\x65\x6e\164\145\x72\x65\x64\x20\x69\163\40\x6e\157\x74\x20\x76\141\154\x69\144", PR__MDL__PANEL), 400); uimeeckqksqeekqq: goto ukqocwewouckikso; } ucqmumuygcywwqma: ukqocwewouckikso: iuuuususuuuaieem: goto uqokiksoqcwwqgio; kocqqoyymosmuksu: $sogksuscggsicmac = $this->oemauiimmycumcsk(sprintf(__("\x25\163\x20\151\163\x20\141\40\x72\145\x71\165\x69\162\145\x20\146\151\145\x6c\x64", PR__MDL__PANEL), $aiowsaccomcoikus->uikgwcuascgeissw()), 400); goto uougwgeyiokewkkm; uqokiksoqcwwqgio: qukocuwgakemmyga: gommacygsykyussk: } uougwgeyiokewkkm: return $sogksuscggsicmac; } public function ugmceccgwaaaigiy($ikgwqyuyckaewsow = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [ self::meksegaoamowuwoq => null, self::aisguagukaewucii => self::ckmqoekmugkggeym, self::mgsccwumkcawaqcy => self::ALL, self::ackcaikowcokggsc => [], self::wacsysugayaeayag => true, ]); switch ($ywmkwiwkosakssii[self::mgsccwumkcawaqcy]) { case self::kqeokggqcsesmqco: $ikgwqyuyckaewsow = $this->cgaksokgcmycgmeo(); goto sioekkmekwygemyc; case self::ALL: default: $ikgwqyuyckaewsow = array_merge($this->ibaymmaeyoceumgw(), $this->cgaksokgcmycgmeo()); goto sioekkmekwygemyc; } yiowgigkkwsoqcci: sioekkmekwygemyc: $mkucggyaiaukqoce = $ywmkwiwkosakssii[self::meksegaoamowuwoq]; $ikgwqyuyckaewsow = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\141\x6e\145\x6c\137\160\x72\x6f\146\x69\x6c\x65\137\x70\145\162\x73\157\x6e\141\x6c\x5f\146\x69\145\x6c\x64\163"), $ikgwqyuyckaewsow, $mkucggyaiaukqoce); $kmogksmigykusaem = $ywmkwiwkosakssii[self::wacsysugayaeayag]; $okaqsamoiqqumygk = []; $yyeuwosgwymeocco = []; $gcygmsqykaykyyim = []; if (!$kmogksmigykusaem) { goto ieqesiiageaauiuw; } $okaqsamoiqqumygk = $this->weysguygiseoukqw(Setting::gyogiiwkqowygoes, $okaqsamoiqqumygk); $yyeuwosgwymeocco = $this->weysguygiseoukqw(Setting::kioockukciugewka, $yyeuwosgwymeocco); $gcygmsqykaykyyim = $this->weysguygiseoukqw(Setting::sweqwcsqywoaomyg, $gcygmsqykaykyyim); ieqesiiageaauiuw: $sogksuscggsicmac = []; $ooiewiwkegguusum = $ywmkwiwkosakssii[self::ackcaikowcokggsc]; $kwcqeacwucqmwmcw = null; $gsyeosaccwkauuyu = []; foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto ocywegekakimmwcq; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $muocgugcqiewywag = true; if (!(!$ooiewiwkegguusum || in_array($aokagokqyuysuksm, $ooiewiwkegguusum, true))) { goto yuimwyoywaiiqacs; } switch ($ywmkwiwkosakssii[self::aisguagukaewucii]) { case self::ckmqoekmugkggeym: if (!$kmogksmigykusaem) { goto ikuuiauwouuqawuw; } if (in_array($aokagokqyuysuksm, $yyeuwosgwymeocco, true)) { goto suqceasgacskcmkc; } if ($aiowsaccomcoikus instanceof Header) { goto oeocukauoyosicso; } $gsyeosaccwkauuyu[$aokagokqyuysuksm] = $momcykaoccoymeig; if (!in_array($aokagokqyuysuksm, $okaqsamoiqqumygk, true)) { goto wsesqmcqoiyyqkqi; } $aiowsaccomcoikus->eumecwmqmukqgyea(); wsesqmcqoiyyqkqi: if (!in_array($aokagokqyuysuksm, $gcygmsqykaykyyim, true)) { goto wkwamkgkwykeqkec; } $aiowsaccomcoikus->uqiyecacqiyeaqqo(); if (!ManipulateUser::igawqaomowicuayw($aokagokqyuysuksm . self::cigcassgekcaiigg, $mkucggyaiaukqoce)) { goto mogkoocsoeuyoqqa; } $aiowsaccomcoikus->cekywgkuyuckekeg(); mogkoocsoeuyoqqa: wkwamkgkwykeqkec: if (!$mkucggyaiaukqoce) { goto oimkeqocuguqqsqk; } $aiowsaccomcoikus->iygyugseyaqwywyg($this->ocoqmuuikmocsqqu($mkucggyaiaukqoce, $aokagokqyuysuksm)); oimkeqocuguqqsqk: oeocukauoyosicso: goto yykqaowwsqgqysmq; suqceasgacskcmkc: $muocgugcqiewywag = false; yykqaowwsqgqysmq: if (!$aiowsaccomcoikus instanceof Header) { goto uckewycoogsogwiy; } if (!(isset($sogksuscggsicmac[$kwcqeacwucqmwmcw]) && !$gsyeosaccwkauuyu)) { goto kwiggogcgciwuwqk; } unset($sogksuscggsicmac[$kwcqeacwucqmwmcw]); kwiggogcgciwuwqk: $gsyeosaccwkauuyu = []; $kwcqeacwucqmwmcw = $momcykaoccoymeig; uckewycoogsogwiy: ikuuiauwouuqawuw: if (!$muocgugcqiewywag) { goto yoqakewookqoqacm; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus; yoqakewookqoqacm: goto oyeyomcgkmgymogq; case self::emgcgiseaoouacge: default: if ($aiowsaccomcoikus instanceof Header) { goto gswcoeiisamakwii; } $sogksuscggsicmac[$aokagokqyuysuksm] = $aiowsaccomcoikus->uikgwcuascgeissw(); gswcoeiisamakwii: goto oyeyomcgkmgymogq; } iesekaeqeomeuaui: oyeyomcgkmgymogq: yuimwyoywaiiqacs: ocywegekakimmwcq: mscyggqcesgqqksu: } gamqcwuwkikwqoay: if (!($kmogksmigykusaem && !$gsyeosaccwkauuyu && isset($sogksuscggsicmac[$kwcqeacwucqmwmcw]))) { goto emqswoaawgeyosmi; } unset($sogksuscggsicmac[$kwcqeacwucqmwmcw]); emqswoaawgeyosmi: return $sogksuscggsicmac; } public function ibaymmaeyoceumgw() : array { return [Form::wowyaacgaccyeici(__("\125\x73\145\162\x20\x49\156\x66\x6f", PR__MDL__PANEL)), Form::kimoeccokowuaiic(self::meweoeakkqyiwuyy, __("\x41\166\x61\164\141\x72", PR__MDL__PANEL))->scmsukieucuekmki()->wsacuksekeaemucu(204800), Form::ymuegqgyuagyucws(self::kagqiwogmiguosiw, __("\106\x69\x72\163\x74\40\x4e\141\155\145", PR__MDL__PANEL))->eumecwmqmukqgyea(), Form::ymuegqgyuagyucws(self::scagkwwiiquocimc, __("\x4c\x61\x73\164\x20\x4e\141\155\145", PR__MDL__PANEL))->eumecwmqmukqgyea(), Form::ymuegqgyuagyucws(self::gmyemowoaqyoqwme, __("\116\151\143\x6b\x20\x4e\141\x6d\x65", PR__MDL__PANEL))->eumecwmqmukqgyea(), Form::wowyaacgaccyeici(__("\103\157\156\164\141\143\164\40\x49\156\146\157", PR__MDL__PANEL)), Form::ymuegqgyuagyucws(self::akoagooquksouwka, __("\x45\x6d\x61\151\154", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::uqmywyokmkwwmuic)->mkiaygiogeeyogqm(false), Form::ymuegqgyuagyucws(self::ccyqsqcgksyckkcm, __("\127\x65\142\163\x69\164\x65", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::yakumqwueukksgcm)->xkgcwkwsqysqamic()]; } public function cgaksokgcmycgmeo() : array { $ikgwqyuyckaewsow = [Form::ymuegqgyuagyucws(self::uymswsomcyoqsegc, __("\115\157\x62\x69\154\145", PR__MDL__PANEL))->saemoowcasogykak(IconFontawesomeInterface::iowyguocewicoegk)->smigkcmumwkgamkk(), Form::wowyaacgaccyeici(__("\x56\x65\x72\x69\x66\151\143\x61\164\x69\157\156\40\x49\x6e\x66\157\162\x6d\x61\164\151\157\156", PR__MDL__PANEL)), Form::ymuegqgyuagyucws(self::iuwkkyuoyukacwwy, __("\116\x61\164\x69\x6f\156\x61\x6c\x20\103\157\x64\x65", PR__MDL__PANEL))->igmaewykumgwoaoy("\x6d\x61\x78\154\145\x6e\147\164\x68", 10)->sqcsseccsaqsoyqy()->suaookwiwycuwmuk("\156\141\x74\x69\157\x6e\x61\x6c\x2d\x63\157\144\145"), Form::kimoeccokowuaiic(self::kmyciqicaqsgiwga, __("\116\x61\164\x69\x6f\x6e\141\x6c\x20\103\x61\x72\144", PR__MDL__PANEL))->esauscaiuyiikmgc()->wsacuksekeaemucu(204800)]; return (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\160\x61\156\145\154\137\165\x73\145\162\137\143\x75\x73\164\157\x6d\x5f\146\151\145\x6c\x64\163"), $ikgwqyuyckaewsow); } public function ksoemussqmaacucm($mkucggyaiaukqoce) : array { $yyimiwcuegayoskq = []; $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy([], [self::meksegaoamowuwoq => $mkucggyaiaukqoce, self::wacsysugayaeayag => false]); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && !$aiowsaccomcoikus instanceof Header)) { goto okkmcocqokkskasy; } $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea(); $yyimiwcuegayoskq[$uusmaiomayssaecw] = $this->ocoqmuuikmocsqqu($mkucggyaiaukqoce, $uusmaiomayssaecw); okkmcocqokkskasy: esikeyqyuikmaiek: } iwsmmkqaoksmocok: return $yyimiwcuegayoskq; } private function ocoqmuuikmocsqqu($mkucggyaiaukqoce, $uusmaiomayssaecw) { if (in_array($uusmaiomayssaecw, [self::meweoeakkqyiwuyy, self::kmyciqicaqsgiwga], true)) { goto ikqeeaysmqgcgawq; } if (isset($mkucggyaiaukqoce->{$uusmaiomayssaecw})) { goto qiiigwkqeoewsuwm; } $eqgoocgaqwqcimie = ManipulateUser::igawqaomowicuayw($uusmaiomayssaecw, $mkucggyaiaukqoce); goto esaqcqqwuussiiwo; qiiigwkqeoewsuwm: $eqgoocgaqwqcimie = $mkucggyaiaukqoce->{$uusmaiomayssaecw}; esaqcqqwuussiiwo: goto mscgewkcqcoowweg; ikqeeaysmqgcgawq: $eqgoocgaqwqcimie = $this->iqqqmsismuacmaqo($mkucggyaiaukqoce, $uusmaiomayssaecw); mscgewkcqcoowweg: return $eqgoocgaqwqcimie; } }
