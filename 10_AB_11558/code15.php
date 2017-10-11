<?php
 // buat abstract class
 abstract class smartphone{
 	// buat abstract method
 	abstract public function hidupkan_komputer();
 	abstract public function lihat_spec();
 	abstract public function lihat_processor();
 	abstract public function lihat_harddisk();
 	abstract public function lihat_pemilik();
 }
 class tablet extends smartphone{
	public function hidupkan_komputer(){
 		echo "Hidupkan Komputer";
 	}
 	public function lihat_spec(){
 		echo "Lihat spec tablet";
 	}
 	public function lihat_processor(){
 		echo "Lihat processor tablet";
 	}
 	public function lihat_harddisk(){
 		echo "Lihat harddisk tablet";
 	}
 	public function lihat_pemilik(){
 		echo "Pemilik tablet";
 	}
 }
 
 $obj_tablet = new tablet();
 echo $obj_tablet->hidupkan_komputer(); echo "<br />";
 echo $obj_tablet->lihat_spec(); echo "<br />";
 echo $obj_tablet->lihat_processor(); echo "<br />";
 echo $obj_tablet->lihat_harddisk(); echo "<br />";
 echo $obj_tablet->lihat_pemilik();
 ?> 