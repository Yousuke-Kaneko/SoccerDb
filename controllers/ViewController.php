<?php

class ViewController extends Controller
{
	protected $auth_actions = array();

	public function indexAction()
	{
		// $user = $this->session->get('user');
		// $statuses = $this->db_manager->get('User')->fetchAllPersonalArchivesByUserId($user['id']);

		return $this->render(array(
			'statuses' => $statuses,
			'body' => '',
			'_token' => $this->generateCsrfToken('view/post'),
		));
	}
}