<?php

namespace blog\Repositories;
use blog\User;
use blog\Student;

class StudentRepository
{
	public function forUser(User $user)
	{
		return Student::where('user_id', $user->id)
				->orderBy('created_at', 'des')
				->get();
	}
}