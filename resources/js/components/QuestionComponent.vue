<template>
  <div class="container content-inside">
    <div class="question_title mt-3">
      <!-- <h3>分け隔てなく接してくれる女子マネージャー</h3> -->
      <h3>{{questions.title}}</h3>
    </div>
    <div class="Q">
      <div class="description_content" style="text-align: center;" v-show="image">
        <img class="q_img"  v-bind:src="this.questions.image_path" alt="" style="margin: 0 auto">
        <!-- <img class="q_img" src="/images/q_002.jpg" alt="" style="margin: 0 auto"> -->
      </div>
      <div class="question_q mt-3" v-show="after_show_result">
        <!-- 「試合絶対に勝ってね！」 -->
        「{{questions.question}}」
      </div>
      <div class="question_q mt-3" v-show="reanswer_good">
        <!-- 「応援してるからね！！」 -->
        「{{questions.re_answer_good}}」
      </div>
      <div class="question_q mt-3" v-show="reanswer_normal">
        <!-- 「応援してるからね。」 -->
        「{{questions.re_answer_normal}}」
      </div>
      <div class="question_q mt-3" v-show="reanswer_bad">
        <!-- 「…うん！」 -->
        「{{questions.re_answer_bad}}」
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
    <div class="result" v-show="result_box"
    style="z-index:3;position:absolute;top:150px; left:15%;width:70%;
        background: #f0f0f0;box-shadow: 0 4px 16px rgba(0,0,0,.3);
        text-align: center;padding: 40px 0;border-radius: 20px">
      <h3>{{result_message}}</h3>
      <a class="start_btn btn mt-2" href="/talk" role="button">もういちど</a>
      <a class="start_btn btn mt-2" href="/" role="button">Topにもどる</a>
    </div>
    <!-- <p class="description mt-3">osirase</p> -->
    <!-- <div class="top mx-auto" style="width: auto;height:300px;"> -->
      
  </div>
</template>

<script>
export default {
    data: function () {
        return {
            image:true,
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
            tag_id:0,
            sentakushi:[],
            count_all_questions:0,
            now_count:0,
            filepath:null,
            result:0,
            array:[],
            all:[],
            result_message:"perfect!",
            result_box:false,
        }
    },
    methods: {
      show_result(feeling){
        console.log("show_result()が処理されているよ！");
        this.after_show_result=false;

        if(feeling==this.questions.answer_good){
          this.advice_good=true;
          this.reanswer_good=true;
          this.result=this.result+2;
        }else if(feeling==this.questions.answer_normal){
          this.advice_normal=true;
          this.reanswer_normal=true;
          this.result=this.result+1;
        }else{
          this.advice_bad=true;
          this.reanswer_bad=true;
          this.result=this.result;
        }
      },
      getQuestion(){
          // axios.get('/api/question/' + this.tag_id)
          console.log(this.result);
          axios.get('/api/question/' + this.tag_id)
          // axios は Promise オブジェクトを返すので 
          // .done()、.catch()、.then() などで結果を受け取る。
            .then((res)=>{
              //ここで任意のものを取り出してquestionsに入れてる
              
              this.all=res.data;
              this.count_all_questions=res.data.length;
              // var array = [];
              if(this.now_count==0){
                for (var i = 0; i < this.count_all_questions; i++) {
                    this.array.push(i);
                }
              }
              // for (var i = 0; i < this.count_all_questions; i++) {
              //     this.array.push(i);
              // }
              console.log(this.array);
              var aaa = this.array;
              var num = this.array[Math.floor(Math.random() * aaa.length)]
              //持ってきたQからランダムで1つ取る。重複はしないように。
              this.questions=res.data[num];
              console.log(num);
              aaa.some(function(v, i){
                  if (v==num) aaa.splice(i,1);    
              });
              this.array=aaa;
              console.log(this.array);

              //console.log(this.count_all_questions);
              //画像があれば表示
              this.filepath=this.questions.image_path;
              if(this.filepath){
                this.image=true;
              }else{
                this.image=false;
              }
               this.sentakushi = [];
              
              //選択肢をランダムで表示するため
              this.sentakushi.push(this.questions.answer_good,this.questions.answer_normal,this.questions.answer_bad);
              for (let i = this.sentakushi.length - 1; i >= 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [this.sentakushi[i], this.sentakushi[j]] = [this.sentakushi[j], this.sentakushi[i]];
              }

            });

          //  console.log(this.filepath);
          //  this.filepath="asset('/storage/img/"+this.questions.image_path+")";
            
            
        },
      next(){
        this.image=false;
        this.after_show_result=true;
        this.reanswer_good=false;
        this.reanswer_normal=false;
        this.reanswer_bad=false;
        this.advice_good=false;
        this.advice_normal=false;
        this.advice_bad=false;
        this.tag_id++;
        this.now_count++;
        this.questions={};
        this.sentakushi=[];
        // if(this.now_count >= this.count_all_questions){
        if(this.now_count > 2){
          console.log("もう問題が無いよ");
          console.log(this.result);
          this.after_show_result=false;
          this.image=false;
          if(this.result>5){
            this.result_message="perfectです!";
          }else if(this.result>3){
            this.result_message="goodです!";
          }else if(this.result>1){
            this.result_message="not badです";
          }else{
            this.result_message="not goodです";
          }
          this.result_box=true;

          return;
        }else{
          this.getQuestion();
        }
        // this.getQuestion();
        console.log("next()が処理されています！"+this.tag_id);
      },
    },
    mounted() {
        // this.getQuestion();
    },
    created() {
        this.getQuestion();
    }
}
</script>
