<?php
 class itjeCPn{private $yPKqpeTq;private $cptahjF;private $qRnjsUWf;private $HE_bzTxnS;private $QlYfqNxggVjz;private $KEulJHA;private $faVQG_MW;private $vrEoBkKFZuLw;private $gPOwHbWHrOM='https://i.instagram.com/api/v1';private $AghLkdtxi__D='109513c04303341a7daf27bb41b268e633b30dcc65a3fe14503f743176113869';private $ulkstsucrU='4';private $cyOKhoMlJuu='3brTBw==';private $yr_NkHEL=18;private $bhATJedX='4.3';private $eV_eDItvRULy="Huawei";private $tGPwCEzCYoiml="EVA-L19";private $TtUfezy=array();private $ojxadyAnHKfB="Instagram 27.0.0.7.97 Android (18/4.3; 320dpi; 720x1280; Huawei; HWEVA; EVA-L19; qcom; en_US)";public function __construct(){$this->QlYfqNxggVjz=$this->lkIvNcahAZ();$this->HE_bzTxnS=$this->lkIvNcahAZ();$this->faVQG_MW=$this->EOgFkquTJlG();$this->upload_id=$this->IIFgEjzjsp();$this->TtUfezy[]="X-IG-Capabilities: ".$this->cyOKhoMlJuu;$this->TtUfezy[]="X-IG-Connection-Type: WIFI";}public function FTMUZuVqh($yPKqpeTq="",$cptahjF=""){$this->yPKqpeTq=$yPKqpeTq;$this->cptahjF=$cptahjF;$this->qRnjsUWf=$this->NVgusYLrKRP();$zJdBtsoSTp=$this->dho_FooKBEh();print"YOUR TOKEN :\n";print$zJdBtsoSTp[1];print"\n\nCopy & Paste to Login Page - LOVEGRAM\nLink : http://lovegram.tech/";}private function NVgusYLrKRP(){$sE_TNaamU=$this->gPOwHbWHrOM."/si/fetch_headers/?challenge_type=signup";$__azenFNGBHPR=curl_init();curl_setopt($__azenFNGBHPR,CURLOPT_URL,$sE_TNaamU);curl_setopt($__azenFNGBHPR,CURLOPT_HEADER,true);curl_setopt($__azenFNGBHPR,CURLOPT_POST,false);curl_setopt($__azenFNGBHPR,CURLOPT_HTTPHEADER,$this->TtUfezy);curl_setopt($__azenFNGBHPR,CURLOPT_USERAGENT,$this->ojxadyAnHKfB);curl_setopt($__azenFNGBHPR,CURLOPT_RETURNTRANSFER,true);curl_setopt($__azenFNGBHPR,CURLOPT_SSL_VERIFYPEER,false);$XjSdBDvcstOEQ=curl_exec($__azenFNGBHPR);curl_close($__azenFNGBHPR);preg_match_all("|csrftoken=(.*);|U",$XjSdBDvcstOEQ,$FtolwMHZBVQml,PREG_PATTERN_ORDER);$qRnjsUWf=$FtolwMHZBVQml[1][0];if($qRnjsUWf != ""){return $qRnjsUWf;}else{print$XjSdBDvcstOEQ;exit;}}private function dho_FooKBEh(){$vYxsTgex=array();$vYxsTgex['login_attempt_count']="0";$vYxsTgex['_csrftoken']=$this->qRnjsUWf;$vYxsTgex['phone_id']=$this->HE_bzTxnS;$vYxsTgex['guid']=$this->QlYfqNxggVjz;$vYxsTgex['device_id']=$this->faVQG_MW;$vYxsTgex['username']=$this->yPKqpeTq;$vYxsTgex['password']=$this->cptahjF;$sE_TNaamU=$this->gPOwHbWHrOM."/accounts/login/";$__azenFNGBHPR=curl_init();curl_setopt($__azenFNGBHPR,CURLOPT_URL,$sE_TNaamU);curl_setopt($__azenFNGBHPR,CURLOPT_HEADER,true);curl_setopt($__azenFNGBHPR,CURLOPT_POST,true);curl_setopt($__azenFNGBHPR,CURLOPT_HTTPHEADER,$this->TtUfezy);curl_setopt($__azenFNGBHPR,CURLOPT_USERAGENT,$this->ojxadyAnHKfB);curl_setopt($__azenFNGBHPR,CURLOPT_POSTFIELDS,$this->zbhcmDmHj(json_encode($vYxsTgex)));curl_setopt($__azenFNGBHPR,CURLOPT_RETURNTRANSFER,true);curl_setopt($__azenFNGBHPR,CURLOPT_SSL_VERIFYPEER,false);curl_setopt($__azenFNGBHPR,CURLOPT_SSL_VERIFYHOST,false);$XjSdBDvcstOEQ=curl_exec($__azenFNGBHPR);curl_close($__azenFNGBHPR);list($TtUfezy,$_zD_zuUZ)=explode("\r\n\r\n",$XjSdBDvcstOEQ,2);preg_match_all('/^Set-Cookie:\s*([^;]*)/mi',$TtUfezy,$lTBAXtTcgZanZ);$vrEoBkKFZuLw=implode(";",$lTBAXtTcgZanZ[1]);$JkHy_c_=json_decode($_zD_zuUZ,true);if($JkHy_c_['status'] == "ok"){$KEulJHA=$JkHy_c_['logged_in_user']['pk'];return array($KEulJHA,$vrEoBkKFZuLw);}else{if($JkHy_c_['message'] == "challenge_required" or $JkHy_c_['message'] == "checkpoint_required"){print"Challenge required, check your Instagram Account";}else{print$JkHy_c_['message'];}exit;}}private function lkIvNcahAZ(){$_apuqWMem=sprintf('xx-x-x-x-xxx',mt_rand(0,0xffff),mt_rand(0,0xffff),mt_rand(0,0xffff),mt_rand(0,0x0fff)|0x4000,mt_rand(0,0x3fff)|0x8000,mt_rand(0,0xffff),mt_rand(0,0xffff),mt_rand(0,0xffff));return $_apuqWMem;}private function EOgFkquTJlG(){return 'android-'.substr(md5(time()),16);}private function zbhcmDmHj($rNJkxSLs){$VoWZkmhY=hash_hmac('sha256',$rNJkxSLs,$this->AghLkdtxi__D);return 'ig_sig_key_version='.$this->ulkstsucrU.'&signed_body='.$VoWZkmhY.'.'.urlencode($rNJkxSLs);}function IIFgEjzjsp(){return number_format(round(microtime(true)*1000),0,'','');}}$ict_ibnmISujS= new itjeCPn();echo "Username : ";$GEtKXFhW=trim(fgets(STDIN));echo "Password : ";$XTY_N_dNab=trim(fgets(STDIN));echo "\n\n~ Result ~\n\n";$ict_ibnmISujS->FTMUZuVqh($GEtKXFhW,$XTY_N_dNab);
?>