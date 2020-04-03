# talk-exercise!
一問一答形式の会話を成立させ、コミュニケーション能力の向上を図るwebアプリケーションです。<br>
選択肢は3つ、グッドコミュニケーションを目指しましょう。<br>

![talk_view](https://user-images.githubusercontent.com/58460151/78370765-0db1f500-7602-11ea-897d-915d71806a16.png)
# Dependency
PHP 7.4.1<br>
Laravel 7.1.1<br>
Vue.js 2.6.11<br>

# Usage
トップページから「会話をはじめる」を押して頂くとトーク画面に遷移します。<br>

![index_view](https://user-images.githubusercontent.com/58460151/78371212-9cbf0d00-7602-11ea-8451-4ccb41183d87.png)

データベースに登録されている会話からランダムに3つが出題されます。<br>
この画面ではVueを使用しています。<br>
3つの問題が終わりますと、あなたの選択に応じたリザルトが表示されます。<br>

右上のメニューからユーザー登録をしていただくと会話を作成することができます。<br>

![create_view](https://user-images.githubusercontent.com/58460151/78371485-ffb0a400-7602-11ea-9061-20157246b7e5.png)

作成した会話はログイン後のHome画面にて管理していただけます。<br>

![home_view](https://user-images.githubusercontent.com/58460151/78372131-dc3a2900-7603-11ea-95cb-21c5cdf9bdd9.png)
