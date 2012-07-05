<?php
use fluxbb\User;
class FluxBB_User_Controller extends FluxBB_BaseController
{	
	public function get_profile($id = 0)
	{
		$user = User::where('id', '=', $id)->first();
		if(!empty($id) && !empty($user)) //If no user defined or if user doesn't exist
		{
		return View::make('fluxbb::user.profile.view')
				->with('user', $user);
		}
		else
		{ return "User not found";}
	}
}