<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('question_tables')->truncate();
        DB::table('question_tables')->insert([
            [
                'image_path'=>'/storage/img/q_002.jpg',
                'title'=>'分け隔てなく接してくれる女子マネージャー',
                'question'=>'試合絶対に勝ってね！',
                'answer_good'=>'ありがとう！頑張るよ！！',
                'answer_normal'=>'あぁ、うん。',
                'answer_bad'=>'ああ。夢の舞台はすぐそこだ。',
                're_answer_good'=>'応援してるからね！！',
                're_answer_normal'=>'応援してるね',
                're_answer_bad'=>'…うん！',
                'advice_good'=>'爽やかでいいですね。',
                'advice_normal'=>'元気が足りません。緊張しているのですか？',
                'advice_bad'=>'落ち着いてください。',
                'user_id'=>'1',
            ],
            [
                'image_path'=>'/storage/img/q_001.jpg',
                'title'=>'test2',
                'question'=>'お疲れさまです',
                'answer_good'=>'お疲れさま。',
                'answer_normal'=>'お疲れさま 今日も頑張ってたね',
                'answer_bad'=>'…。',
                're_answer_good'=>'明日もよろしくお願いいたします！',
                're_answer_normal'=>'ありがとうございます。',
                're_answer_bad'=>'…お先に失礼します',
                'advice_good'=>'シンプルでいいですね。',
                'advice_normal'=>'お疲れさまだけでいいと思います。',
                'advice_bad'=>'挨拶もできないほど疲れているのですか？',
                'user_id'=>'1',
            ],
            [
                'image_path'=>'/storage/img/q_002.jpg',
                'title'=>'test3',
                'question'=>'試合絶対に勝ってね！',
                'answer_good'=>'ありがとう！頑張るよ！！',
                'answer_normal'=>'あぁ、うん。',
                'answer_bad'=>'ああ。夢の舞台はすぐそこだ。',
                're_answer_good'=>'応援してるからね！！',
                're_answer_normal'=>'応援してるね',
                're_answer_bad'=>'…うん！',
                'advice_good'=>'爽やかでいいですね。',
                'advice_normal'=>'元気が足りません。緊張しているのですか？',
                'advice_bad'=>'落ち着いてください。',
                'user_id'=>'1',
            ],
          ]);
    }
}
