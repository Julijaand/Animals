<?php

	class animal {
		
		static function register($animal_id, $type, $color, $weight, $sex, $age) {
			$db = new db();
			$data_arr = array(
				'animal_id'=>$animal_id,
				'type'=>$type,
				'color'=>$color,
				'weight'=>$weight,
				'sex'=>$sex,
				'age'=>$age
			);
			$sql = "INSERT INTO `animals` SET 
				`animal_id`=:uanimal_id,
				`type`=:type,
				`color`=:color,
				`weight`=:weight,
				`sex`=:sex,
				`age`=:age";
			$db->insert($sql, $data_arr);
		}
		
		static function getInfo($animal_id, $selfinfo = false) {
            $db = new db();
            $data_arr = array(
                'id'=>$animal_id
            );
            $sql = "SELECT * FROM `animals` WHERE `animal_id`=:id LIMIT 1";
			
            $ftc = $db->select($sql, $data_arr);
            // if ($ftc[0]['animal_id']>0) {
			// 	if ($selfinfo === true) {
			// 		$_SESSION['animal_stat']['level'] = $ftc[0]['level'];
			// 		$_SESSION['char_stat']['gold'] = $ftc[0]['gold'];
			// 		$_SESSION['char_stat']['health'] = $ftc[0]['health'];
			// 		$_SESSION['char_stat']['stamina'] = $ftc[0]['stamina'];
			// 		$_SESSION['char_stat']['str'] = $ftc[0]['str'];
			// 		$_SESSION['char_stat']['dex'] = $ftc[0]['dex'];
			// 		$_SESSION['char_stat']['agi'] = $ftc[0]['agi'];
			// 		$_SESSION['char_stat']['int'] = $ftc[0]['int'];
			// 	}
                return $ftc;
            // } else {
            //     return false;
            // }
        }
		
		// static function hasCharacter($user_id) {
		// 	$db = new db();
		// 	$data_arr = array(
		// 		'user_id'=>$user_id
		// 	);
		// 	$sql = "SELECT * FROM `characters` WHERE `user_id`=:user_id";
		// 	$ftc = $db->select($sql, $data_arr);
		// 	if ($ftc[0]['id']>0) {
		// 		return true;
		// 	} else {
		// 		return false;
		// 	}
		// }
		
	}

?>