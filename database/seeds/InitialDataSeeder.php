<?php

use App\Models\Lead;
use App\Models\Reminder;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InitialDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // LEADS
        Lead::create([
            'name' => 'Wim Geudens',
            'email' => 'wim_g@gmail.com',
            'phone' => '+32497686739',
            'interested_package' => 'Free plan',
            'dob' => Carbon::createFromFormat('d/m/Y', '20/07/1986'),
            'age' => Carbon::createFromFormat('d/m/Y', '20/07/1986')->age,
            'branch_id' => 1,
            'added_by' => 5,                
        ]);
        Lead::create([
            'name' => 'Philipsen Jan',
            'email' => 'janphilipsen@gmail.com',
            'phone' => '+32468247444',
            'interested_package' => 'Monthly plan',
            'dob' => Carbon::createFromFormat('d/m/Y', '29/11/1954'),
            'age' => Carbon::createFromFormat('d/m/Y', '29/11/1954')->age,
            'branch_id' => 1,
            'added_by' => 1,                
        ]);
        Lead::create([
            'name' => 'Wim Geudens',
            'email' => 'wim_g@gmail.com',
            'phone' => '+32497686739',
            'interested_package' => 'Yearly plan',
            'dob' => Carbon::createFromFormat('d/m/Y', '20/07/1986'),
            'age' => Carbon::createFromFormat('d/m/Y', '20/07/1986')->age,
            'branch_id' => 1,
            'added_by' => 5,                
        ]);
        Lead::create([
            'name' => 'Philipsen Annebeth',
            'email' => 'annebethp@hotmail.com',
            'phone' => '+32496985546',
            'interested_package' => 'Free plan',
            'dob' => Carbon::createFromFormat('d/m/Y', '15/10/1993'),
            'age' => Carbon::createFromFormat('d/m/Y', '15/10/1993')->age,
            'branch_id' => 1,
            'added_by' => 2,                
        ]);
        Lead::create([
            'name' => 'Philipsen Jan',
            'email' => 'janphilipsen@gmail.com',
            'phone' => '+32468247444',
            'interested_package' => 'Yearly plan',
            'dob' => Carbon::createFromFormat('d/m/Y', '29/11/1954'),
            'age' => Carbon::createFromFormat('d/m/Y', '29/11/1954')->age,
            'branch_id' => 1,
            'added_by' => 1,                
        ]);
        Lead::create([
            'name' => 'Wim Geudens',
            'email' => 'wim_g@gmail.com',
            'phone' => '+32497686739',
            'interested_package' => '2-years plan',
            'dob' => Carbon::createFromFormat('d/m/Y', '20/07/1986'),
            'age' => Carbon::createFromFormat('d/m/Y', '20/07/1986')->age,
            'branch_id' => 1,
            'added_by' => 5,                
        ]);
        Lead::create([
            'name' => 'Philipsen Annebeth',
            'email' => 'annebethp@hotmail.com',
            'phone' => '+32496985546',
            'interested_package' => 'Yearly plan',
            'dob' => Carbon::createFromFormat('d/m/Y', '15/10/1993'),
            'age' => Carbon::createFromFormat('d/m/Y', '15/10/1993')->age,
            'branch_id' => 1,
            'added_by' => 2,                
        ]);
        Lead::create([
            'name' => 'Philipsen Annebeth',
            'email' => 'annebethp@hotmail.com',
            'phone' => '+32496985546',
            'interested_package' => '2-years plan',
            'dob' => Carbon::createFromFormat('d/m/Y', '15/10/1993'),
            'age' => Carbon::createFromFormat('d/m/Y', '15/10/1993')->age,
            'branch_id' => 1,
            'added_by' => 2,                
        ]);
        Lead::create([
            'name' => 'Philipsen Jan',
            'email' => 'janphilipsen@gmail.com',
            'phone' => '+32468247444',
            'interested_package' => '2-years plan',
            'dob' => Carbon::createFromFormat('d/m/Y', '29/11/1954'),
            'age' => Carbon::createFromFormat('d/m/Y', '29/11/1954')->age,
            'branch_id' => 1,
            'added_by' => 1,                
        ]);
        Lead::create([
            'name' => 'Philipsen Wout',
            'email' => 'philipsenwout@hotmail.com',
            'phone' => '+32485061827',
            'interested_package' => 'Monthly plan',
            'dob' => Carbon::createFromFormat('d/m/Y', '15/09/1987'),
            'age' => Carbon::createFromFormat('d/m/Y', '15/09/1987')->age,
            'branch_id' => 1,
            'added_by' => 3,                
        ]);
        Lead::create([
            'name' => 'Toon Claes',
            'email' => 'tewain85@outlook.com',
            'phone' => '+32485202138',
            'interested_package' => 'Monthly plan',
            'dob' => Carbon::createFromFormat('d/m/Y', '02/10/1984'),
            'age' => Carbon::createFromFormat('d/m/Y', '02/10/1984')->age,
            'branch_id' => 1,
            'added_by' => 4,                
        ]);
        Lead::create([
            'name' => 'Philipsen Wout',
            'email' => 'philipsenwout@hotmail.com',
            'phone' => '+32485061827',
            'interested_package' => 'Yearly plan',
            'dob' => Carbon::createFromFormat('d/m/Y', '15/09/1987'),
            'age' => Carbon::createFromFormat('d/m/Y', '15/09/1987')->age,
            'branch_id' => 1,
            'added_by' => 3,                
        ]);
        Lead::create([
            'name' => 'Toon Claes',
            'email' => 'tewain85@outlook.com',
            'phone' => '+32485202138',
            'interested_package' => 'Yearly plan',
            'dob' => Carbon::createFromFormat('d/m/Y', '02/10/1984'),
            'age' => Carbon::createFromFormat('d/m/Y', '02/10/1984')->age,
            'branch_id' => 1,
            'added_by' => 4,                
        ]);

        // REMINDERS
        Reminder::create([
            'lead_id' => 11,
            'user_id' => 1,
            'reminder' => 'Call to check on the membership.',
            'reminder_date' => Carbon::now()->subDays(3),
            'note' => 'Customer asked to call again after 2 days.',
            'status' => 'completed',
        ]);
        Reminder::create([
            'lead_id' => 11,
            'user_id' => 1,
            'reminder' => 'A reminder to call the customer again.',
            'reminder_date' => Carbon::now()->subDays(2),
            'status' => 'pending',
        ]);
        Reminder::create([
            'lead_id' => 9,
            'user_id' => 1,
            'reminder' => 'A reminder to call the customer again.',
            'reminder_date' => Carbon::now()->subDays(2),
            'note' => 'Not interested.',
            'status' => 'completed',
        ]);
    }
}
