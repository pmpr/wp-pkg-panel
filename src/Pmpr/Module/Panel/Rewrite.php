<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67bc35df0c37c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\Interfaces\Constants; class Rewrite extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'init'])->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea'])->qcsmikeggeemccuu('query_vars', [$this, 'ceukuueaskasmcsc'])->qcsmikeggeemccuu('wp_logout', [$this, 'mioiuiawygugyywe'])->qcsmikeggeemccuu('template_redirect', [$this, 'siucoqmowciiqwcm'])->qcsmikeggeemccuu('admin_bar_menu', [$this, 'qmueaewgseeqcuwc'], PHP_INT_MAX); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('register', [$this, 'geegeemmsaoqamwu'], 999)->cecaguuoecmccuse('register_url', [$this, 'geegeemmsaoqamwu'], 999)->cecaguuoecmccuse('lostpassword_url', [$this, 'wicoyuqqigwmogoc'], 999)->cecaguuoecmccuse('site_url', [$this, 'kgeeewwmcyqgeuum'], 999, 3)->cecaguuoecmccuse('login_url', [$this, 'eugcquaksuescaig'], 999, 2); $this->aqaqisyssqeomwom('allow_to_add_backlink', [$this, 'yokmeqkmomcoqeqk'], 999)->aqaqisyssqeomwom('get_url_by_context', [$this, 'yqkoimuomisgqsoo'], 10, 3); } public function uwmueckkyiscecgi($iyggcmwmcqmocmwm = null, array $gqgemcmoicmgaqie = []) : ?string { $aaokuekaimigoyue = trailingslashit(Constants::ismwwqmwgmqqocke); $cgmkimaosyyuqeyg = trailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->qasciyckimeascmg()); $mqumqwwemwgskykc = "{$cgmkimaosyyuqeyg}{$aaokuekaimigoyue}"; if ($iyggcmwmcqmocmwm) { $mqumqwwemwgskykc = trailingslashit($mqumqwwemwgskykc) . "#{$iyggcmwmcqmocmwm}"; } if ($gqgemcmoicmgaqie) { $mqumqwwemwgskykc = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($gqgemcmoicmgaqie, $mqumqwwemwgskykc); } return $mqumqwwemwgskykc; } public function yokmeqkmomcoqeqk($cuakwceieagskoaa) { if ($cuakwceieagskoaa && $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(Constants::ismwwqmwgmqqocke)) { $cuakwceieagskoaa = false; } return $cuakwceieagskoaa; } public function yqkoimuomisgqsoo($eeamcawaiqocomwy, $mkomwsiykqigmqca, $mgkceomocowocqyo) { if ($mgkceomocowocqyo === Constants::ismwwqmwgmqqocke) { $eeamcawaiqocomwy = $this->uwmueckkyiscecgi($mkomwsiykqigmqca); } return $eeamcawaiqocomwy; } public function mioiuiawygugyywe() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->gimisysaiasieees()) { $kkmkcysyceyiwskq = $this->uwmueckkyiscecgi('/login'); if ($kkmkcysyceyiwskq) { $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->cquikcuwossiessu($kkmkcysyceyiwskq); exit; } } } public function kgeeewwmcyqgeuum($eeamcawaiqocomwy, $mkomwsiykqigmqca, $iakkeikwceeomgyq) { if ($iakkeikwceeomgyq === 'login' && $mkomwsiykqigmqca === 'wp-login.php?action=register') { $eeamcawaiqocomwy = site_url('register', 'login'); } return $eeamcawaiqocomwy; } public function geegeemmsaoqamwu($eeamcawaiqocomwy) : ?string { $yyksucsgisomecgg = $this->uwmueckkyiscecgi('/register'); if ($yyksucsgisomecgg) { $eeamcawaiqocomwy = $yyksucsgisomecgg; } return $eeamcawaiqocomwy; } public function wicoyuqqigwmogoc($eeamcawaiqocomwy) : ?string { $yyksucsgisomecgg = $this->uwmueckkyiscecgi('/forgot'); if ($yyksucsgisomecgg) { $eeamcawaiqocomwy = $yyksucsgisomecgg; } return $eeamcawaiqocomwy; } public function eugcquaksuescaig($eeamcawaiqocomwy, $gwqgmkqcgwwmweom) : ?string { $kkmkcysyceyiwskq = $this->uwmueckkyiscecgi('/login'); if ($kkmkcysyceyiwskq) { $eeamcawaiqocomwy = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->uogsaoywmawqwmcc($kkmkcysyceyiwskq, $gwqgmkqcgwwmweom); } return $eeamcawaiqocomwy; } public function qmueaewgseeqcuwc($wpAdminBar) { $wpAdminBar->add_node(['id' => $this->caokeucsksukesyo()->cqusmgskowmesgcg()->aakmagwggmkoiiyu($this), 'href' => $this->uwmueckkyiscecgi(), 'title' => __('Frontend Panel', PR__MDL__PANEL), 'parent' => 'site-name-default']); } public function init() { $aaokuekaimigoyue = Constants::ismwwqmwgmqqocke; $this->caokeucsksukesyo()->kuggecgwaickowwu()->kcaoacekwkiqmaee([["^{$aaokuekaimigoyue}/?\$", "index.php?{$aaokuekaimigoyue}=1", 'top']]); } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { $kgcswwyywoscuqqs = ['<IfModule mod_rewrite.c>', 'RewriteEngine on', 'RewriteCond %{HTTP:Authorization} ^(.*)', 'RewriteRule ^(.*) - [E=HTTP_AUTHORIZATION:%1]', '</IfModule>']; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->gcwmgguowgqguesm('Panel', $kgcswwyywoscuqqs, $iswcokucwmiosiaq)) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, $iswcokucwmiosiaq, 'write-htaccess', Constants::imkacwmiuiykyuim); } } } public function siucoqmowciiqwcm() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($mumyimcwkaemyyue->qaumqeeagueuqkcg(Constants::ismwwqmwgmqqocke)) { $meakksicouekcgoe->wwckmeoskuagomki('PR_OPTIMIZATION_DONT_OPTIMIZE', 'panel page can not be cache.'); $csskkwkiwamwuawu[] = 'page-loading'; if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $csskkwkiwamwuawu[] = 'logged-in'; } echo $this->iuygowkemiiwqmiw('index', ['rtl' => $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->gqesusmmigggsqai(), 'title' => '', 'icon_set' => $this->ocksiywmkyaqseou('icon_set', Constants::wikgqsqysyuoykse), 'site_url' => untrailingslashit($this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gmigwwwmwemyaayy()), 'body_class' => implode(' ', $csskkwkiwamwuawu), 'public_path' => trailingslashit($meakksicouekcgoe->kwoeacmuoiuucyes($this)), 'loading_message' => __('Loading...', PR__MDL__PANEL), 'icons_public_path' => trailingslashit($this->caokeucsksukesyo()->usugyumcgeaaowsi()->kwoeacmuoiuucyes(pr_get_foundation())), 'enable_js_message' => __('Looks like your browser not supporting js. please enable it or try with another browser', PR__MDL__PANEL)]); exit; } } public function ceukuueaskasmcsc($kkeqqkkkqwkocsyu = []) : array { $kkeqqkkkqwkocsyu[] = Constants::ismwwqmwgmqqocke; return $kkeqqkkkqwkocsyu; } }
