<template>
  <div class="container content-inside">
    <div class="question_title mt-3">
      <!-- <h3>分け隔てなく接してくれる女子マネージャー</h3> -->
      <h3>ああああああああああああああああああああ</h3>
    </div>
    <div class="Q">
      <div class="description_content" style="text-align: center;">
        <!-- <img class="q_img" src="/images/q_002.jpg" alt="" style="margin: 0 auto"> -->
      </div>
      <div class="question_q mt-3" v-show="after_show_result">
        <!-- 「試合絶対に勝ってね！」 -->
        question
      </div>
      <div class="question_q mt-3" v-show="reanswer_good">
        「応援してるからね！！」
        answer_re1
      </div>
      <div class="question_q mt-3" v-show="reanswer_normal">
        「応援してるからね！！」
        answer_re2
      </div>
      <div class="question_q mt-3" v-show="reanswer_bad">
        「…うん！」
        answer_re3
      </div>
      <div class="question_answer_list">
        <div class="question_answer" @click="show_result(good)" v-show="after_show_result">
          ありがとう！頑張るよ！！
          answer1
        </div>
        <div class="question_answer" @click="show_result(normal)" v-show="after_show_result">
          あぁ、うん。
          answer2
        </div>
        <div class="question_answer" @click="show_result(bad)" v-show="after_show_result">
          任せろ。夢の舞台はすぐそこだ。
          answer3
        </div>
        <div class="question_advice" v-show="advice_good">
          <h4 class="good mb-3" >
            グッドコミュニケーション！
          </h4>
          <p class="advice_comment">
            <strong>advise:</strong>
            爽やかでいいですね。
          </p>
          <button class="btn btn-default">次へ</button>
        </div>
        <div class="question_advice" v-show="advice_normal">
          <h4 class="normal mb-3" >
            ノーマルコミュニケーション
          </h4>
          <p class="advice_comment">
            <strong>advise:</strong>
            元気が足りません。緊張しているのですか？
          </p>
          <button class="btn btn-default">次へ</button>
        </div>
         <div class="question_advice" v-show="advice_bad">
          <h4 class="bad mb-3" >
            バッドコミュニケーション
          </h4>
          <p class="advice_comment">
            <strong>advise:</strong>
            落ち着いてください。
          </p>
          <button class="btn btn-default">次へ</button>
        </div>
      </div>
    </div>
    <!-- <p class="description mt-3">osirase</p> -->
    <!-- <div class="top mx-auto" style="width: auto;height:300px;"> -->
      
  </div>
</template>

<script>
export default {
    data: function () {
        return {
            show: false,
            after_show_result:true,
            reanswer_good:false,
            reanswer_normal:false,
            reanswer_bad:false,
            advice_good:false,
            advice_normal:false,
            advice_bad:false,
            good:0,
            normal:1,
            bad:2,
            questions:{},
        }
    },
    methods: {
      show_result(feeling){
        console.log("show_result()が処理されているよ！");
        this.after_show_result=false;
        if(feeling==0){
          this.advice_good=true;
          this.reanswer_good=true;
        }else if(feeling==1){
          this.advice_normal=true;
          this.reanswer_normal=true;
        }else{
          this.advice_bad=true;
          this.reanswer_bad=true;
        }
      },

        // getTasks() {
        //     axios.get('/api/tasks')
        //     // axios は Promise オブジェクトを返すので 
        //     // .done()、.catch()、.then() などで結果を受け取ります。
        //         .then((res) => {
        //             this.tasks = res.data;
        //         });
        //         // 引数 res の中にステータス、ステータステキスト、データが格納されています。
        //         // res.status、res.statusText、res.data で取得します。
        // },
        // deleteTask(id){
        //   axios.delete('/api/tasks/' + id)
        //   //apiで削除
        //     .then((res)=>{
        //       this.getTasks();
        //       //削除後一覧を読みこみ直す。
        //     })
        // }
      getQuestion(){
          axios.get('/api/question')
            .then((res)=>{
              this.questions=res.data;
              // console.log(this.questions);
              console.log(this.questions[0].title)
            });
            
        },
    },
    mounted() {
        this.getQuestion();
    }
}
</script>
