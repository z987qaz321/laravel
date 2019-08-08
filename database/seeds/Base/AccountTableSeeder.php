<?php

namespace Database\Seeder\Base;

use App\Model\Account;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createAccount('admin', 'admin', Account::TYPE_ADMIN);
        $this->createAccount('108A001', '108A001', Account::TYPE_TEAM);
        $this->createAccount('108A002', '108A002', Account::TYPE_TEAM);
        $this->createAccount('108A003', '108A003', Account::TYPE_TEAM);
        $this->createAccount('108A004', '108A004', Account::TYPE_TEAM);
        $this->createAccount('108A005', '108A005', Account::TYPE_TEAM);
        $this->createAccount('108B001', '108B001', Account::TYPE_TEAM);
        $this->createAccount('108B002', '108B002', Account::TYPE_TEAM);
        $this->createAccount('108B003', '108B003', Account::TYPE_TEAM);
        $this->createAccount('108B004', '108B004', Account::TYPE_TEAM);
        $this->createAccount('108B005', '108B005', Account::TYPE_TEAM);
        $this->createAccount('108B006', '108B006', Account::TYPE_TEAM);
        $this->createAccount('108B007', '108B007', Account::TYPE_TEAM);
        $this->createAccount('108B008', '108B008', Account::TYPE_TEAM);
        $this->createAccount('108B009', '108B009', Account::TYPE_TEAM);
        $this->createAccount('108B010', '108B010', Account::TYPE_TEAM);
        $this->createAccount('108C001', '108C001', Account::TYPE_TEAM);
        $this->createAccount('108C002', '108C002', Account::TYPE_TEAM);
        $this->createAccount('108C003', '108C003', Account::TYPE_TEAM);
        $this->createAccount('108C004', '108C004', Account::TYPE_TEAM);
        $this->createAccount('108C005', '108C005', Account::TYPE_TEAM);
        $this->createAccount('108D001', '108D001', Account::TYPE_TEAM);
        $this->createAccount('108D002', '108D002', Account::TYPE_TEAM);
        $this->createAccount('108D003', '108D003', Account::TYPE_TEAM);
        $this->createAccount('108D004', '108D004', Account::TYPE_TEAM);
        $this->createAccount('108D005', '108D005', Account::TYPE_TEAM);
        $this->createAccount('108TC001', '108TC001', Account::TYPE_TEACHER);
        $this->createAccount('108TC002', '108TC002', Account::TYPE_TEACHER);
        $this->createAccount('108TC003', '108TC003', Account::TYPE_TEACHER);
        $this->createAccount('108TC004', '108TC004', Account::TYPE_TEACHER);
        $this->createAccount('108TC005', '108TC005', Account::TYPE_TEACHER);
        $this->createAccount('108JD001', '108JD001', Account::TYPE_JUDGE);
        $this->createAccount('108JD002', '108JD002', Account::TYPE_JUDGE);
        $this->createAccount('108JD003', '108JD003', Account::TYPE_JUDGE);
        $this->createAccount('108JD004', '108JD004', Account::TYPE_JUDGE);
        $this->createAccount('108JD005', '108JD005', Account::TYPE_JUDGE);
    }

    public function createAccount($account, $password, $identity)
    {
        return Account::create([
            'account' => $account,
            'password' => Hash::make($password),
            'identity' => $identity,
        ]);
    }

}
