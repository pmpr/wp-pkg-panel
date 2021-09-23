<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614c49a77706a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Panel\Data; use Pmpr\Common\Foundation\Data\Data; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Traits\ToArrayTrait; use Pmpr\Package\Panel\Panel; class Route extends Data { use ToArrayTrait; protected $redirect = false; protected ?array $meta = []; protected int $priority = 0; protected bool $enable = true; protected ?string $link = null; protected ?string $name = null; protected ?string $icon = null; protected ?string $path = null; protected bool $divider = false; protected ?string $title = null; protected ?array $children = []; protected ?string $parent = null; protected bool $showInMenu = true; protected ?string $component = null; protected ?string $description = null; public function __construct(string $ymqmyyeuycgmigyo = null) { $this->name = $ymqmyyeuycgmigyo; $this->path = $ymqmyyeuycgmigyo; } public function qmgcisuuikgmqcsu() : ?string { return $this->link; } public function qoowicksguscqyks(?string $iwywmkygwewiamwm) : self { goto oycuaqewsskgkqci; oycuaqewsskgkqci: $this->faioisokmmaeimoo(); goto ocmagamuyawyiyka; amqgiisymksuuuss: return $this; goto iwgmywqocewwgoeo; ocmagamuyawyiyka: $this->link = $iwywmkygwewiamwm; goto amqgiisymksuuuss; iwgmywqocewwgoeo: } public function wywmmeyauqkeskeq(bool $oqkgomucoyswikgk) : self { $this->enable = $oqkgomucoyswikgk; return $this; } public function meqceykmywmqgoym() : ?string { return $this->description; } public function gucwmccyimoagwcm(?string $ukwokcuqauuosmoo) : self { goto syoeqaqkseguwmgy; gwkawguwsamuomuo: return $this; goto ucasigqmoiwaimkk; syoeqaqkseguwmgy: $this->giwmekimakcaawsq("\144\145\163\143\x72\151\160\x74\x69\157\156", $ukwokcuqauuosmoo); goto sgiouaqukyycswqm; sgiouaqukyycswqm: $this->description = $ukwokcuqauuosmoo; goto gwkawguwsamuomuo; ucasigqmoiwaimkk: } public function faioisokmmaeimoo() : self { $this->redirect = true; return $this; } public function yqeeiukmseiyuici() : array { goto mmmqqoemusicwgqg; omsmaougqkqigogw: wowmysuygugawmmu: goto geasgywiogoeamek; geasgywiogoeamek: return $gwqgmkqcgwwmweom; goto qweyymyuuqwcmkqg; iquugwoswgkoiieg: $okcscwesammossuq = $this->mmoaikqueyiwcesm(); goto xogaycsaesgqeqig; imwiyqcekcykscui: $gwqgmkqcgwwmweom = ["\156\141\155\x65" => $wcgsoqmmciswkmiq->aakmagwggmkoiiyu()]; goto umemmgiwimkymaya; xogaycsaesgqeqig: if (empty($okcscwesammossuq)) { goto wowmysuygugawmmu; } goto gsiaskgsukseumig; umemmgiwimkymaya: uugwmywmaqomeksa: goto omsmaougqkqigogw; woqkgwmkmqsuceuy: $wcgsoqmmciswkmiq->faioisokmmaeimoo(); goto imwiyqcekcykscui; mmmqqoemusicwgqg: $gwqgmkqcgwwmweom = []; goto iquugwoswgkoiieg; gsiaskgsukseumig: $wcgsoqmmciswkmiq = reset($okcscwesammossuq); goto syiyemqigyugagks; syiyemqigyugagks: if (!($wcgsoqmmciswkmiq instanceof Route && !$wcgsoqmmciswkmiq->cqyswgsawqcqagee())) { goto uugwmywmaqomeksa; } goto woqkgwmkmqsuceuy; qweyymyuuqwcmkqg: } public function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->meta[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function kygqaqiwaucqacqm() : bool { return $this->showInMenu; } public function wiskakymeaywyeuw(bool $cyiwaggmwimigmcc) : self { $this->showInMenu = $cyiwaggmwimigmcc; return $this; } public function mmuyuqussqkgkega(?string $omwmuycmeqcqokom) : self { $this->parent = $omwmuycmeqcqokom; return $this; } public function ygqycmmkoiuocoia() : ?string { return $this->parent; } public function cqusmgskowmesgcg() : ?string { return $this->component; } public function askmmuauqcuuqsea(?string $wksoawcgagcgoask) : self { $this->component = $wksoawcgagcgoask; return $this; } public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self { $this->name = $ymqmyyeuycgmigyo; return $this; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function cqyswgsawqcqagee() : bool { return $this->divider; } public function gckcwqgiewywsgeq() : self { $this->divider = true; return $this; } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { goto guqmgiqaaowaauyo; ucaoyoamaycsiacq: return $this; goto iuyagqakcieasiua; guqmgiqaaowaauyo: $this->icon = $wkaqekwwgqsqwcoi; goto mccimkgwkkamsime; mccimkgwkkamsime: $this->giwmekimakcaawsq("\x69\x63\x6f\x6e", $this->eyamqkqiykagecsw()); goto ucaoyoamaycsiacq; iuyagqakcieasiua: } public function amqagusacuuuaswg() : ?string { return $this->path; } public function qksaqgcokiqamueg(?string $mkomwsiykqigmqca) : self { $this->path = $mkomwsiykqigmqca; return $this; } public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function yywskysiycwkwsgw() : ?int { return $this->priority; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { goto oasisywuwssumsok; oasisywuwssumsok: $this->giwmekimakcaawsq("\x74\151\164\154\145", $meqocwsecsywiiqs); goto iaoyeugekskmewgs; iokemmkgmcaksiqu: return $this; goto okagauksoqkoqygi; iaoyeugekskmewgs: $this->title = $meqocwsecsywiiqs; goto iokemmkgmcaksiqu; okagauksoqkoqygi: } public function mmoaikqueyiwcesm() : ?array { return $this->children; } public function kkisyguyosoyymqs() : bool { return !empty($this->mmoaikqueyiwcesm()); } public function pmouaioykaoceyag(Route $wcgsoqmmciswkmiq) : self { $this->children[$wcgsoqmmciswkmiq->aakmagwggmkoiiyu()] = $wcgsoqmmciswkmiq; return $this; } public function eswyoccyuiyiqkco(array $okcscwesammossuq) : Route { goto qckouamqueqiykqi; measoqewessauqma: eciksmgaqikwegwq: goto auaigccmwqwsqsku; qckouamqueqiykqi: foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) { $this->pmouaioykaoceyag($wcgsoqmmciswkmiq); kieyoaoawqacqamy: } goto measoqewessauqma; auaigccmwqwsqsku: return $this; goto wiaesksmicgikqcm; wiaesksmicgikqcm: } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { goto qesqgumuouyymcwa; ggqwcqssoauckuic: mcucegiogmuyogki: goto ggwcauaeuagekeyo; mmkoqmccusoeaoyi: if (!(is_bool($gwqgmkqcgwwmweom) && $gwqgmkqcgwwmweom)) { goto gqaimiooakyykccy; } goto waewaiuiogywqigu; weggeeowykuqooyg: aqigiwmamkowomiw: goto cqkuuyouqoqyguus; aqmiewawgseaqeqk: agemeseegiuuowgo: goto gaceikykesgywssm; gyeayeuuyiemuwuq: $aqmwamyiwgeeymqa = ManipulateArray::get($ywmkwiwkosakssii, "\162\145\x71\x75\145\x73\x74"); goto kyggwyywiycksgqq; gaceikykesgywssm: $this->children = ManipulateArray::yaeiiwwyckwugsem($this->mmoaikqueyiwcesm()); goto weggeeowykuqooyg; aymmymequcisekie: $mkucggyaiaukqoce = ManipulateArray::get($ywmkwiwkosakssii, self::USER); goto gyeayeuuyiemuwuq; qesqgumuouyymcwa: if (!$this->cqyswgsawqcqagee()) { goto mcucegiogmuyogki; } goto csyoimsqgwcmiwki; kyggwyywiycksgqq: $okcscwesammossuq = DecoratorHook::sscegwueamckwmcy("\x70\x61\156\145\154\137\162\157\165\x74\145\137{$this->aakmagwggmkoiiyu()}\x5f\143\x68\x69\x6c\144\x72\145\x6e", $this->mmoaikqueyiwcesm(), $mkucggyaiaukqoce, $aqmwamyiwgeeymqa); goto sugumgeqcwgekcqs; sugumgeqcwgekcqs: if (!$okcscwesammossuq) { goto aqigiwmamkowomiw; } goto imeaiksowuukikui; imeaiksowuukikui: foreach ($okcscwesammossuq as $ymqmyyeuycgmigyo => $wcgsoqmmciswkmiq) { goto camawumockccayaq; usgcoawgqswoeiec: goswwiomuackymqi: goto qowcwmsiyscackaa; uuisaeysawuagysg: $this->children[$ymqmyyeuycgmigyo] = $wcgsoqmmciswkmiq->sacmkccceuywoqsq(true, $ywmkwiwkosakssii); goto ggqeakyaggiuegek; camawumockccayaq: if (!$wcgsoqmmciswkmiq instanceof Route) { goto gykuaukukosiocoy; } goto uuisaeysawuagysg; ggqeakyaggiuegek: gykuaukukosiocoy: goto usgcoawgqswoeiec; qowcwmsiyscackaa: } goto aqmiewawgseaqeqk; csyoimsqgwcmiwki: $this->qksaqgcokiqamueg(''); goto ggqwcqssoauckuic; ggwcauaeuagekeyo: $gwqgmkqcgwwmweom = $this->redirect; goto mmkoqmccusoeaoyi; waewaiuiogywqigu: $this->redirect = $this->yqeeiukmseiyuici(); goto yyamycyesguwueuw; yyamycyesguwueuw: gqaimiooakyykccy: goto aymmymequcisekie; cqkuuyouqoqyguus: } }
