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
        DB::table('question_tables')->insert([
            [
                'image_path'=>'/images/q_002.jpg',
                'title'=>'分け隔てなく接してくれる女子マネージャー',
                'question'=>'試合絶対に勝ってね！',
                'answer_good'=>'ありがとう！頑張るよ！！',
                'answer_normal'=>'あぁ、うん。',
                'answer_bad'=>'ああ。夢の舞台はすぐそこだ。',
                're_answer_good'=>'「応援してるからね！！」',
                're_answer_normal'=>'「応援してるからね！！」',
                're_answer_bad'=>'「…うん！」',
                'advice_good'=>'爽やかでいいですね。',
                'advice_normal'=>'元気が足りません。緊張しているのですか？',
                'advice_bad'=>'落ち着いてください。',
            ],
            [
                'image_path'=>'/images/q_001.jpg',
                'title'=>'test2',
                'question'=>'試合絶対に勝ってね！',
                'answer_good'=>'ありがとう！頑張るよ！！',
                'answer_normal'=>'あぁ、うん。',
                'answer_bad'=>'ああ。夢の舞台はすぐそこだ。',
                're_answer_good'=>'「応援してるからね！！」',
                're_answer_normal'=>'「応援してるからね！！」',
                're_answer_bad'=>'「…うん！」',
                'advice_good'=>'爽やかでいいですね。',
                'advice_normal'=>'元気が足りません。緊張しているのですか？',
                'advice_bad'=>'落ち着いてください。',
            ],
            [
                'image_path'=>'/images/q_001.jpg',
                'title'=>'test3',
                'question'=>'試合絶対に勝ってね！',
                'answer_good'=>'ありがとう！頑張るよ！！',
                'answer_normal'=>'あぁ、うん。',
                'answer_bad'=>'ああ。夢の舞台はすぐそこだ。',
                're_answer_good'=>'「応援してるからね！！」',
                're_answer_normal'=>'「応援してるからね！！」',
                're_answer_bad'=>'「…うん！」',
                'advice_good'=>'爽やかでいいですね。',
                'advice_normal'=>'元気が足りません。緊張しているのですか？',
                'advice_bad'=>'落ち着いてください。',
            ],
          ]);
    }
}
