<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643273b050d5e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Module\Panel\Plugin\Plugin; use Pmpr\Module\Panel\REST\REST; use Pmpr\Module\Panel\Setting as Options; class Panel extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x50\141\x6e\145\154", PR__MDL__PANEL); }, self::wuowaiyouwecckaw => false]); if (!$this->gmiyqqaekqcsoime()) { goto yqagomygmeoecwey; } parent::__construct(); $this->iemaakgqgqosiecm(); yqagomygmeoecwey: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\x74", [$this, "\161\141\x79\x69\145\165\163\x63\163\x73\x6b\151\x71\x61\143\163"]); } public function iemaakgqgqosiecm() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { goto qikaewekoecykeou; } User::symcgieuakksimmu(); REST::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Plugin::symcgieuakksimmu(); Rewrite::symcgieuakksimmu(); qikaewekoecykeou: } public function qayieuscsskiqacs() { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yckucuyiaykemqea = $gkyciwoiiisgywcs->cmaecekuqkwmemms("\x50\x52\x5f\x43\117\116\106\x49\107\137\x50\101\124\110"))) { goto syuaummumssgwwee; } $wkcwykowmmmwioqs = self::gomekwmqwuwyuugo; $kicoywcqyusguqsa = [Setting::okkqqmwseqscceye, Setting::cuoqwcygqikwequw . self::mswocgcucqoaesaa, Setting::gkmwweisyowgsgii . self::mswocgcucqoaesaa]; $iiaumsgauuyeqksw = $this->kcciqwskewsuaemk(); if ($iiaumsgauuyeqksw->exists(trailingslashit($yckucuyiaykemqea) . $wkcwykowmmmwioqs)) { goto agkmiayuawacakau; } $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $uiewakwqscemywuo = ["\x66\x72\157\156\164\137\x75\x72\x6c" => $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy(), "\x61\x64\x6d\x69\x6e\x5f\x75\162\154" => $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ewcokmoyomeywmkg(), self::NAME => $qkqgcaykemoiecma->ciqkaakiwsgqwiqu(self::NAME), self::eqkeooqcsscoggia => $qkqgcaykemoiecma->ciqkaakiwsgqwiqu(self::eqkeooqcsscoggia)]; $amakmumgguksgmum = Options::symcgieuakksimmu(); $qiouiwasaauyaaue = $amakmumgguksgmum::mywwyegkuymookeg(); if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) { goto sguskaeaaqcagqgc; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($qiouiwasaauyaaue as $omqquekswieeogws => $omkysikckkcieckq) { if (!in_array($omqquekswieeogws, $kicoywcqyusguqsa, true)) { goto aiccyaswigkaycqk; } goto usymasgsyqgsuocg; aiccyaswigkaycqk: switch ($omqquekswieeogws) { case $amakmumgguksgmum::cuoqwcygqikwequw: case $amakmumgguksgmum::gkmwweisyowgsgii: $weowoqykiyuqcwam = $amakmumgguksgmum::eiwcuqigayigimak($omqquekswieeogws . self::mswocgcucqoaesaa); if (!$weowoqykiyuqcwam) { goto zayqqeqgcwkekwws; } $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); $uiewakwqscemywuo[$omqquekswieeogws] = $gkyciwoiiisgywcs->get($eaeiswmwiqewicoc->uikkssqcoewckces((int) $weowoqykiyuqcwam), 0); $uiewakwqscemywuo["{$omqquekswieeogws}\137\x68\x74\x6d\x6c"] = $eaeiswmwiqewicoc->qaeeusqkgwagwaqc($weowoqykiyuqcwam); zayqqeqgcwkekwws: goto sqyokemumceysegy; case $amakmumgguksgmum::gskyioqkyeoaeiyk: $omkysikckkcieckq = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($omkysikckkcieckq); foreach ($omkysikckkcieckq as $ucsmiamgwmayyoco) { $ucsmiamgwmayyoco = array_filter($ucsmiamgwmayyoco); if ($gkyciwoiiisgywcs->uuegkqwagymmusiy($ucsmiamgwmayyoco, [self::ascagqcquwgmygkm, self::cyqwkyucgoeyuyyq])) { goto ucuoeymyqeokgsya; } $uusmaiomayssaecw = $gkyciwoiiisgywcs->get($ucsmiamgwmayyoco, self::ascagqcquwgmygkm); $suaemuyiacqyugsm = $seumokooiykcomco->get($ucsmiamgwmayyoco[self::cyqwkyucgoeyuyyq]); if (!($suaemuyiacqyugsm && self::wmmucsiyiyusmssm === $seumokooiykcomco->ucwmcwqmqwaymkkc($suaemuyiacqyugsm))) { goto egmayaiikwsskgmy; } $uiewakwqscemywuo[$omqquekswieeogws][$uusmaiomayssaecw] = [self::qescuiwgsyuikume => $gkyciwoiiisgywcs->get($ucsmiamgwmayyoco, self::qescuiwgsyuikume, $seumokooiykcomco->qcgakseyaikigqco($suaemuyiacqyugsm)), self::sauwwsocmukoaayu => $seumokooiykcomco->ycqquoiyyuesegsy($suaemuyiacqyugsm)]; egmayaiikwsskgmy: ucuoeymyqeokgsya: mysueeoswqgccmui: } aueaceeyommgkicu: goto sqyokemumceysegy; default: $uiewakwqscemywuo[$omqquekswieeogws] = $omkysikckkcieckq; } oqousikwiiqagoyw: sqyokemumceysegy: usymasgsyqgsuocg: } eucqomyqykgoiuge: if (!($iiaumsgauuyeqksw->mkdir($yckucuyiaykemqea) && $iiaumsgauuyeqksw->coeoweawgagkycwe($yckucuyiaykemqea))) { goto yuuyikiacmmueosu; } $iiaumsgauuyeqksw->mikiwoyomouecayw($yckucuyiaykemqea, $wkcwykowmmmwioqs, $uiewakwqscemywuo); yuuyikiacmmueosu: sguskaeaaqcagqgc: agkmiayuawacakau: syuaummumssgwwee: } }
