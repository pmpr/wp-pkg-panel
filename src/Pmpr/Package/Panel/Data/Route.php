<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61616ef63748c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel\Data; use Pmpr\Common\Foundation\Data\Data; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Traits\ToArrayTrait; use Pmpr\Package\Panel\Panel; class Route extends Data { use ToArrayTrait; protected $redirect = false; protected ?array $meta = []; protected int $priority = 0; protected bool $enable = true; protected ?string $link = null; protected ?string $name = null; protected ?string $icon = null; protected ?string $path = null; protected bool $divider = false; protected ?string $title = null; protected ?array $children = []; protected ?string $parent = null; protected bool $showInMenu = true; protected ?string $component = null; protected ?string $description = null; public function __construct(string $ymqmyyeuycgmigyo = null) { $this->name = $ymqmyyeuycgmigyo; $this->path = $ymqmyyeuycgmigyo; } public function qmgcisuuikgmqcsu() : ?string { return $this->link; } public function qoowicksguscqyks(?string $iwywmkygwewiamwm) : self { goto suscosoukqeyyqgs; eysuawiooiswaseq: return $this; goto iecqkqoiqimmisyw; kiewcwsykccgocuc: $this->link = $iwywmkygwewiamwm; goto eysuawiooiswaseq; suscosoukqeyyqgs: $this->faioisokmmaeimoo(); goto kiewcwsykccgocuc; iecqkqoiqimmisyw: } public function wywmmeyauqkeskeq(bool $oqkgomucoyswikgk) : self { $this->enable = $oqkgomucoyswikgk; return $this; } public function meqceykmywmqgoym() : ?string { return $this->description; } public function gucwmccyimoagwcm(?string $ukwokcuqauuosmoo) : self { goto eogomkswkaqwyycm; euuekiyqwkowiees: return $this; goto assoyoeukmqiucyq; eogomkswkaqwyycm: $this->giwmekimakcaawsq("\144\145\x73\143\162\x69\x70\x74\151\x6f\x6e", $ukwokcuqauuosmoo); goto egiauwuekseyeaeq; egiauwuekseyeaeq: $this->description = $ukwokcuqauuosmoo; goto euuekiyqwkowiees; assoyoeukmqiucyq: } public function faioisokmmaeimoo() : self { $this->redirect = true; return $this; } public function yqeeiukmseiyuici() : array { goto esokkakkumskkmiu; mqacqosyicuiqwia: return $gwqgmkqcgwwmweom; goto mcuoyseuwoueyaie; iayguaeseyaemwkk: if (!($wcgsoqmmciswkmiq instanceof Route && !$wcgsoqmmciswkmiq->cqyswgsawqcqagee())) { goto kikkkoqiumqoeiyy; } goto akyiiioycmgqyuok; gqycmyieayoegcsy: if (empty($okcscwesammossuq)) { goto wyqueeskecameuks; } goto sqiyuasgusgawuoi; akyiiioycmgqyuok: $wcgsoqmmciswkmiq->faioisokmmaeimoo(); goto ycomeuqeessamows; guummoewucyeuiek: wyqueeskecameuks: goto mqacqosyicuiqwia; ycomeuqeessamows: $gwqgmkqcgwwmweom = ["\x6e\x61\x6d\145" => $wcgsoqmmciswkmiq->aakmagwggmkoiiyu()]; goto owiguescmqyqukui; owiguescmqyqukui: kikkkoqiumqoeiyy: goto guummoewucyeuiek; esokkakkumskkmiu: $gwqgmkqcgwwmweom = []; goto msiuqseowuumiwuo; sqiyuasgusgawuoi: $wcgsoqmmciswkmiq = reset($okcscwesammossuq); goto iayguaeseyaemwkk; msiuqseowuumiwuo: $okcscwesammossuq = $this->mmoaikqueyiwcesm(); goto gqycmyieayoegcsy; mcuoyseuwoueyaie: } public function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->meta[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function kygqaqiwaucqacqm() : bool { return $this->showInMenu; } public function wiskakymeaywyeuw(bool $cyiwaggmwimigmcc) : self { $this->showInMenu = $cyiwaggmwimigmcc; return $this; } public function mmuyuqussqkgkega(?string $omwmuycmeqcqokom) : self { $this->parent = $omwmuycmeqcqokom; return $this; } public function ygqycmmkoiuocoia() : ?string { return $this->parent; } public function cqusmgskowmesgcg() : ?string { return $this->component; } public function askmmuauqcuuqsea(?string $wksoawcgagcgoask) : self { $this->component = $wksoawcgagcgoask; return $this; } public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self { $this->name = $ymqmyyeuycgmigyo; return $this; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function cqyswgsawqcqagee() : bool { return $this->divider; } public function gckcwqgiewywsgeq() : self { $this->divider = true; return $this; } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { goto kwowggaooiyqawyq; ciiyqsiswkcwsocm: return $this; goto ugyawwukegyoqmsq; ieoeeyieoskuyiyw: $this->giwmekimakcaawsq("\x69\143\157\x6e", $this->eyamqkqiykagecsw()); goto ciiyqsiswkcwsocm; kwowggaooiyqawyq: $this->icon = $wkaqekwwgqsqwcoi . "\56\x73\166\x67"; goto ieoeeyieoskuyiyw; ugyawwukegyoqmsq: } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qksaqgcokiqamueg(?string $mkomwsiykqigmqca) : self { $this->path = $mkomwsiykqigmqca; return $this; } public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function yywskysiycwkwsgw() : ?int { return $this->priority; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { goto soqkewsayowwcmco; soqkewsayowwcmco: $this->giwmekimakcaawsq("\164\x69\x74\x6c\x65", $meqocwsecsywiiqs); goto ukigmkeewuqomooc; wwgikwuigiiqsswq: return $this; goto seyygcwcaogkmaqe; ukigmkeewuqomooc: $this->title = $meqocwsecsywiiqs; goto wwgikwuigiiqsswq; seyygcwcaogkmaqe: } public function mmoaikqueyiwcesm() : ?array { return $this->children; } public function kkisyguyosoyymqs() : bool { return !empty($this->mmoaikqueyiwcesm()); } public function pmouaioykaoceyag(Route $wcgsoqmmciswkmiq) : self { $this->children[$wcgsoqmmciswkmiq->aakmagwggmkoiiyu()] = $wcgsoqmmciswkmiq; return $this; } public function eswyoccyuiyiqkco(array $okcscwesammossuq) : Route { goto qoaawmmcqyacokws; cwmuqmoeauqcewoy: return $this; goto eiecgqokmuekaesc; qoaawmmcqyacokws: foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $this->pmouaioykaoceyag($wcgsoqmmciswkmiq); ykcmomsiayaymysm: } goto uwyeycaywowwiquu; uwyeycaywowwiquu: uugiuqkesegaamqw: goto cwmuqmoeauqcewoy; eiecgqokmuekaesc: } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { goto uckusgwkoycmkeam; eekkcooqswqouoei: $okcscwesammossuq = DecoratorHook::sscegwueamckwmcy("\x70\x61\156\x65\154\x5f\x72\x6f\x75\164\145\x5f{$this->aakmagwggmkoiiyu()}\137\x63\150\151\x6c\x64\x72\145\x6e", $this->mmoaikqueyiwcesm(), $mkucggyaiaukqoce, $aqmwamyiwgeeymqa); goto cuayqmasemsqsume; ewsigoeswimiueqe: cciakcwuweqmcose: goto gaskcgoeywuyukke; uckusgwkoycmkeam: if (!$this->cqyswgsawqcqagee()) { goto ggsugekocmsukuci; } goto gscyiqmmegqmqcoe; gscyiqmmegqmqcoe: $this->qksaqgcokiqamueg(''); goto mieoguuqiwqioeqa; cuayqmasemsqsume: if (!$okcscwesammossuq) { goto cciakcwuweqmcose; } goto igmawmwssyskqqag; igmawmwssyskqqag: foreach ($okcscwesammossuq as $ymqmyyeuycgmigyo => $wcgsoqmmciswkmiq) { goto msmmiaumiasmsiog; gqeoaceyoiicoaec: gcecieuocqawmgci: goto kkckyqmcyussauma; kkckyqmcyussauma: wicuauokauykwoeu: goto ikukqooiowqywyqo; msmmiaumiasmsiog: if (!$wcgsoqmmciswkmiq instanceof Route) { goto gcecieuocqawmgci; } goto oksqsucimimsswcg; oksqsucimimsswcg: $this->children[$ymqmyyeuycgmigyo] = $wcgsoqmmciswkmiq->sacmkccceuywoqsq(true, $ywmkwiwkosakssii); goto gqeoaceyoiicoaec; ikukqooiowqywyqo: } goto iomwkkieqcswkkaw; icoiqskygugkgmkm: ceosmkqgqgwsowwg: goto kocaieyauyiqmyiy; gcqssckowmywoesw: $aqmwamyiwgeeymqa = ManipulateArray::get($ywmkwiwkosakssii, "\x72\x65\x71\x75\145\163\164"); goto eekkcooqswqouoei; swicauyqusmgeccu: if (!(is_bool($gwqgmkqcgwwmweom) && $gwqgmkqcgwwmweom)) { goto ceosmkqgqgwsowwg; } goto maguoggkqamaiuag; iomwkkieqcswkkaw: kcwgiwimgqesukqu: goto eussqkkimciywios; kocaieyauyiqmyiy: $mkucggyaiaukqoce = ManipulateArray::get($ywmkwiwkosakssii, self::USER); goto gcqssckowmywoesw; maguoggkqamaiuag: $this->redirect = $this->yqeeiukmseiyuici(); goto icoiqskygugkgmkm; eussqkkimciywios: $this->children = ManipulateArray::yaeiiwwyckwugsem($this->mmoaikqueyiwcesm()); goto ewsigoeswimiueqe; mieoguuqiwqioeqa: ggsugekocmsukuci: goto qosswumywsaeyqus; qosswumywsaeyqus: $gwqgmkqcgwwmweom = $this->redirect; goto swicauyqusmgeccu; gaskcgoeywuyukke: } }
