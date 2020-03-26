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
                'image_path'=>'/images/q_002.jpg',
                'title'=>'分け隔てなく接してくれる女子マネージャー',
                'question'=>'試合絶対に勝ってね！',
                'answer_good'=>'ありがとう！頑張るよ！！',
                'answer_normal'=>'うん。',
                'answer_bad'=>'ああ。夢の舞台はすぐそこだ。',
                're_answer_good'=>'応援してるからね！！',
                're_answer_normal'=>'応援してるね',
                're_answer_bad'=>'…うん！',
                'advice_good'=>'爽やかでいいですね。',
                'advice_normal'=>'少し元気が足りませんね。',
                'advice_bad'=>'少し落ち着いてください。',
                'user_id'=>'1',
            ],
            [
                'image_path'=>'/images/q_001.jpg',
                'title'=>'帰り際の女性新入社員',
                'question'=>'お疲れさまです',
                'answer_good'=>'お疲れさま。',
                'answer_normal'=>'お疲れさま 今日も頑張ってたね',
                'answer_bad'=>'…。',
                're_answer_good'=>'明日もよろしくお願いします！',
                're_answer_normal'=>'ありがとうございます。',
                're_answer_bad'=>'…。',
                'advice_good'=>'シンプルでいいですね。',
                'advice_normal'=>'少し馴れ馴れしい気がしますね',
                'advice_bad'=>'挨拶も返せないほど疲れているのですか？',
                'user_id'=>'1',
            ],
            [
                'image_path'=>'/images/q_003.jpg',
                'title'=>'嫌な進捗管理をする上司',
                'question'=>'なんでまだ出来てないの？',
                'answer_good'=>'あなたのせいでは？',
                'answer_normal'=>'すみません、急ぎます。',
                'answer_bad'=>'ごめんなさい...(泣)',
                're_answer_good'=>'あぁ？',
                're_answer_normal'=>'言われる前に急げないの？',
                're_answer_bad'=>'泣いて謝って欲しいって聞こえた？',
                'advice_good'=>'強気でいいですね。',
                'advice_normal'=>'辛いですが、がんばってください。',
                'advice_bad'=>'泣かないで',
                'user_id'=>'1',
            ],
            [
                'image_path'=>'/images/q_004.jpg',
                'title'=>'反省の色が見えない後輩社員',
                'question'=>'すいやせん',
                'answer_good'=>'次はもっと良くできるように、一緒に考えよう',
                'answer_normal'=>'大丈夫だよ',
                'answer_bad'=>'仕事を増やすなゴミ!!',
                're_answer_good'=>'ホント良い先輩っすね！',
                're_answer_normal'=>'あざまる',
                're_answer_bad'=>'そんな言い方なくないですか？',
                'advice_good'=>'あなたのもとで働きたいものですね。',
                'advice_normal'=>'普通ですね。',
                'advice_bad'=>'嫌な怒り方ですね。',
                'user_id'=>'1',
            ],
            [
                'image_path'=>'/images/q_005.jpg',
                'title'=>'金を借りることへのハードルが低い知り合い',
                'question'=>'２万でいい、頼む',
                'answer_good'=>'嫌だよ',
                'answer_normal'=>'何に使うの？',
                'answer_bad'=>'仕方ないなぁ',
                're_answer_good'=>'ひとでなし',
                're_answer_normal'=>'色々困ってんだ',
                're_answer_bad'=>'サンキューな！',
                'advice_good'=>'この人に貸す必要はないですね。',
                'advice_normal'=>'用途次第で検討するのは良いですね。',
                'advice_bad'=>'こんな奴に貸してはいけません',
                'user_id'=>'1',
            ],
            [
                'image_path'=>'/images/q_006.jpg',
                'title'=>'スムージーにハマった恋人',
                'question'=>'あなたも飲まない？',
                'answer_good'=>'明日飲むよ',
                'answer_normal'=>'また今度ね',
                'answer_bad'=>'美味しくないから嫌だよ',
                're_answer_good'=>'わかった 美味しいの作るね！',
                're_answer_normal'=>'今度っていつ？',
                're_answer_bad'=>'（ ;  ; ）',
                'advice_good'=>'明日には忘れていて欲しいですね。',
                'advice_normal'=>'曖昧な返答ですね。',
                'advice_bad'=>'適当に濁しましょう。',
                'user_id'=>'1',
            ],
          ]);
    }
}
