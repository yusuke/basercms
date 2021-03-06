<?php
/**
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright (c) baserCMS Users Community <http://basercms.net/community/>
 *
 * @copyright		Copyright (c) baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Baser.Controller
 * @since			baserCMS v 4.0.11
 * @license			http://basercms.net/license/index.html
 */

/**
 * フォーム管理用コントローラー
 *
 * @package Baser.Controller
 * @property CakeRequest $request
 */
class BcFormController extends AppController {
/**
 * モデル
 * @var array
 */
	public $uses = [];
	
/**
 * セキュリティトークンを取得する
 *
 * @return mixed
 */
	public function ajax_get_token() {
		$this->autoRender = false;
		return $this->getToken();
	}
	
}