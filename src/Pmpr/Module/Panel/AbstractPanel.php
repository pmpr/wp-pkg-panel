<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6793da2ed0fc2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Panel; use Pmpr\Common\Foundation\REST\RESTRegister; use Pmpr\Module\Panel\Data\Route; abstract class AbstractPanel extends RESTRegister { protected ?string $name = null; protected ?bool $checkAuth = false; protected ?string $parent = "\x70\x61\156\145\x6c"; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function ygqycmmkoiuocoia() : ?string { return $this->parent; } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\160\141\x6e\x65\154\137\x73\x63\x72\x69\160\164\x73", [$this, "\x77\161\x71\143\153\153\155\161\x61\153\x69\161\165\171\x63\x73"])->aqaqisyssqeomwom("\x70\141\x6e\145\x6c\x5f\164\x72\141\x6e\x73\154\x61\164\151\x6f\x6e\163", [$this, "\167\165\x6f\x77\x6f\155\163\141\x67\157\x71\153\x6d\x61\x69\157"])->aqaqisyssqeomwom("\160\141\156\145\x6c\137\x72\x6f\165\164\145\137{$this->ygqycmmkoiuocoia()}\137\143\150\151\x6c\x64\162\x65\156", [$this, "\x63\155\x75\147\161\145\x67\x67\155\167\161\x69\x69\x65\x79\155"], 10, 2); parent::kgquecmsgcouyaya(); } public function sqwgomwcqysewuks($mkucggyaiaukqoce) : array { return []; } public function oeuiuocwuggewqmk($uusmaiomayssaecw) : Route { return new Route($uusmaiomayssaecw); } public function yaegyqkcqwowauga() : array { return []; } public function cmugqeggmwqiieym($okcscwesammossuq, $mkucggyaiaukqoce) : array { if ($this->checkAuth && is_wp_error($mkucggyaiaukqoce)) { return $okcscwesammossuq; } $ikamsuaiikaggcga = $this->sqwgomwcqysewuks($mkucggyaiaukqoce); if ($ikamsuaiikaggcga) { $okcscwesammossuq = array_merge($okcscwesammossuq, $ikamsuaiikaggcga); } return $okcscwesammossuq; } public function wqqckkmqakiquycs($mismekckwcmuksik = []) : array { $mismekckwcmuksik[$this->aakmagwggmkoiiyu()] = $this->caokeucsksukesyo()->usugyumcgeaaowsi()->aqmcwcyggeiyooyg($this, "\160\141\156\x65\x6c\56\x6a\163"); return $mismekckwcmuksik; } public final function wuowomsagoqkmaio($qsmicgaymwwckcsa = []) : array { $uwomkgseoiegeume = $this->yaegyqkcqwowauga(); if ($uwomkgseoiegeume) { $qsmicgaymwwckcsa = array_merge($qsmicgaymwwckcsa, $uwomkgseoiegeume); } return $qsmicgaymwwckcsa; } }
