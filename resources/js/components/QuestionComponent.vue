<template>
  <div class="container content-inside">
    <div class="question_title mt-3">
      <!-- <h3>分け隔てなく接してくれる女子マネージャー</h3> -->
      <!-- <h3>ああああああああああああああああああああ</h3> -->
      <h3>{{questions.title}}</h3>
    </div>
    <div class="Q">
      <div class="description_content" style="text-align: center;">
        <!-- <img class="q_img"  v-bind:src="questions.image_path" alt="" style="margin: 0 auto"> -->
        <!-- <img class="q_img" src="/images/q_002.jpg" alt="" style="margin: 0 auto"> -->
      </div>
      <div class="question_q mt-3" v-show="after_show_result">
        <!-- 「試合絶対に勝ってね！」 -->
        {{questions.question}}
      </div>
      <div class="question_q mt-3" v-show="reanswer_good">
        <!-- 「応援してるからね！！」 -->
        {{questions.re_answer_good}}
      </div>
      <div class="question_q mt-3" v-show="reanswer_normal">
        <!-- 「応援してるからね。」 -->
        {{questions.re_answer_normal}}
      </div>
      <div class="question_q mt-3" v-show="reanswer_bad">
        <!-- 「…うん！」 -->
        {{questions.re_answer_bad}}
      </div>
      <div class="question_answer_list">
        <div class="question_answer" @click="show_result(sentakushi[0])" v-show="after_show_result">
          <!-- ありがとう！頑張るよ！！ -->
          <!-- {{questions.answer_good}} -->
          {{sentakushi[0]}}
        </div>
        <div class="question_answer" @click="show_result(sentakushi[1])" v-show="after_show_result">
          <!-- {{questions.answer_normal}} -->
          {{sentakushi[1]}}
        </div>
        <div class="question_answer" @click="show_result(sentakushi[2])" v-show="after_show_result">
          <!-- {{questions.answer_bad}} -->
          {{sentakushi[2]}}
        </div>
        <div class="question_advice" v-show="advice_good">
          <h4 class="good mb-3" >
            グッドコミュニケーション！
          </h4>
          <p class="advice_comment">
            <strong>advise:</strong>
            {{questions.advice_good}}
          </p>
          <button class="btn btn-default"  @click="next()">次へ</button>
        </div>
        <div class="question_advice" v-show="advice_normal">
          <h4 class="normal mb-3" >
            ノーマルコミュニケーション
          </h4>
          <p class="advice_comment">
            <strong>advise:</strong>
            {{questions.advice_normal}}
          </p>
          <button class="btn btn-default"  @click="next()">次へ</button>
        </div>
         <div class="question_advice" v-show="advice_bad">
          <h4 class="bad mb-3" >
            バッドコミュニケーション
          </h4>
          <p class="advice_comment">
            <strong>advise:</strong>
            {{questions.advice_bad}}
          </p>
          <button class="btn btn-default"  @click="next()">次へ</button>
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
            tag_id:1,
            sentakushi:[],

        }
    },
    methods: {
      show_result(feeling){
        console.log("show_result()が処理されているよ！");
        this.after_show_result=false;

        if(feeling==this.questions.answer_good){
          this.advice_good=true;
          this.reanswer_good=true;
          console.log("good")
        }else if(feeling==this.questions.answer_normal){
          this.advice_normal=true;
          this.reanswer_normal=true;
        }else{
          this.advice_bad=true;
          this.reanswer_bad=true;
        }
      },
      getQuestion(){
          axios.get('/api/question/' + this.tag_id)
          // axios は Promise オブジェクトを返すので 
          // .done()、.catch()、.then() などで結果を受け取る。
            .then((res)=>{
              this.questions=res.data;
              // console.log(this.questions);
              // console.log(this.questions.image_path);
              // this.sentakushi = [];
              
              //選択肢をランダムで表示するため
              this.sentakushi.push(this.questions.answer_good,this.questions.answer_normal,this.questions.answer_bad);
              for (let i = this.sentakushi.length - 1; i >= 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [this.sentakushi[i], this.sentakushi[j]] = [this.sentakushi[j], this.sentakushi[i]];
              }
              console.log(this.sentakushi);
            });
            
        },
      next(){
        this.after_show_result=true;
        this.reanswer_good=false;
        this.reanswer_normal=false;
        this.reanswer_bad=false;
        this.advice_good=false;
        this.advice_normal=false;
        this.advice_bad=false;
        this.tag_id++;
        this.questions={};
        this.sentakushi=[];
        this.getQuestion();
        console.log("next()が処理されています！"+this.tag_id);
      }
    },
    mounted() {
        // this.getQuestion();
    },
    created() {
        this.getQuestion();
    }
}
</script>
