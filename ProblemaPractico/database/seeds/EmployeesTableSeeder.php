<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees_json = json_decode(file_get_contents(storage_path('/employees.json')));

        foreach ($employees_json as $employeeJson) {
            $employee = new \App\Employee();
            $employee->is_online = $employeeJson->isOnline;
            $employee->salary = doubleval(str_replace(',', '', str_replace('$', '', $employeeJson->salary)));
            $employee->age = $employeeJson->age;
            $employee->position = $employeeJson->position;
            $employee->name = $employeeJson->name;
            $employee->gender = $employeeJson->gender;
            $employee->email = $employeeJson->email;
            $employee->phone = $employeeJson->phone;
            $employee->address = $employeeJson->address;

            $skills = [];
            foreach ($employeeJson->skills as $skill) {
                $skills[] = $skill->skill;
            }
            $employee->skills = implode(",", $skills);
            $employee->save();
        }

    }
}
