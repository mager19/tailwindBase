<?php

/**
 * This class is responsible for setting updater.
 * @since      1.0.0
 * @package    Fps_Sticky_Menu
 * @subpackage Fps_Sticky_Menu/includes
 * @author     Joel Bohorquez <joel@frontporchsolutions.com>
 */


class Fps_Sticky_Menu_Updater {

	protected $plugin_name = 'fps-sticky-menu';
	protected $repository = 'https://bitbucket.org/joelbohorquez/fps-sticky-menu';
	protected $consumer_key = 'kYdrsttZMGewWG9hEd';
	protected $consumer_secret = 'gQYrY4qyDM3cmtJ6fmVhBqEXfQJBebET';
	protected $branch = 'master';

	public function __construct(){
		$this->dependencies();
		$this->init();
	}

	public function dependencies(){
		// Let's include main updater class
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/plugin-update-checker/plugin-update-checker.php';
	}

	public function init(){
		$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
			$this->repository,
			FPS_STICKY_MENU__FILE__,
			$this->plugin_name
		);

		//Optional: If you're using a private repository, create an OAuth consumer
		//and set the authentication credentials like this:
		//Note: For now you need to check "This is a private consumer" when
		//creating the consumer to work around #134:
		// https://github.com/YahnisElsts/plugin-update-checker/issues/134
		$myUpdateChecker->setAuthentication(array(
			'consumer_key' => $this->consumer_key,
			'consumer_secret' => $this->consumer_secret,
		));

		//Optional: Set the branch that contains the stable release.
		$myUpdateChecker->setBranch($this->branch);
	}

}

new Fps_Sticky_Menu_Updater();
