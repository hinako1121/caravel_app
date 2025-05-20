<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 20件の投稿とユーザーを作成
        for ($i = 0; $i < 20; $i++) {
            // ユーザーを作成
            $user = User::factory()->create([
                'role' => null,
            ]);

            // 作成したユーザーに関連する投稿を作成
            Post::factory()->create([
                'user_id' => $user->id
            ]);
        }
    }
}
