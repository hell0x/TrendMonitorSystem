## TrendMonitorSystem ##

**事件监测分析系统** 是一个监测收集各种国内外具有影响力的事件，科学的分析对国内股市基金等的影响，并智能化给予投资意见的系统。

### 安装方式 ###

* 键入 `git clone https://github.com/hell0x/TrendMonitorSystem.git projectname` 去克隆本资源库 
* 键入 `cd projectname` 进入项目
* 键入 `composer install` 进行依赖安装
* 复制 *.env.example* 到 *.env* 生成环境配置文件
* 键入 `php artisan key:generate` 在 *.env* 文件中生成安全密钥
* 如果你要使用 MySQL，那么需要配置 *.env* 文件 :
   * 设置 DB_CONNECTION
   * 设置 DB_DATABASE
   * 设置 DB_USERNAME
   * 设置 DB_PASSWORD
* 键入 `php artisan migrate --seed` 来进行项目迁移和数据填充，来生成表格和测试数据
* 编辑 *.env* 来进行邮箱配置

### 使用或集成 ###

* [Styleshout](https://www.styleshout.com/) 前端模板库
* [CKEditor](http://ckeditor.com) 一个好用的富文本编辑器
* [Elfinder](https://github.com/Studio-42/elFinder) 好用的文件管理器
* [Sweat Alert](http://t4t5.github.io/sweetalert/) 炫酷的基于JavaScript响应式弹窗
* [Gravatar](https://github.com/creativeorange/gravatar) the Gravatar package
* [Intervention Image](http://image.intervention.io/) 图片处理
* [Email confirmation](https://github.com/bestmomo/laravel-email-confirmation) 电子邮件确认包
* [Laravel debugbar](https://github.com/barryvdh/laravel-debugbar) laravel调试工具包
* [bootstrap](http://www.bootcss.com/) 前端开发框架
* [Awesome](http://www.fontawesome.com.cn/) 图标库
* [Swaggervel](https://github.com/slampenny/Swaggervel) 自动化生成接口文档包
* [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) 自动生成规范化PHP代码包
* ...

### 特点 ###

* Home page
* 自定义错误或异常模板 403, 404 and 503等
* 验证 (registration, login, logout, password reset, mail confirmation, throttle)
* 权限控制 : 
	* administrator[管理员] (所有权限)
	* 待补充...
* 只能爬取处理对经济运行有影响的事件，分析处理并提取关键信息
* 根据各种因素进行通过核心算法处理，加权算出各种事件的重要性分值
* 把事件按重要性划分为（全球性大事件，地区性大事件，国家性大事件，组织机构性事件，国内事件，一般事件，不重要性事件）七个级别
* 系统会每天自动发送统计出的数据给用户，并合理的给出投资参考意见
* 当系统判定发生最高等级事件时，会立即发送邮件给用户，以便用户处理
* ...

### 构建 ###
* 一个redis字典
* 一个mongodb库，用户爬虫存储数据
* 一个mysql库，存储基本数据和新闻事件的二次处理数据
* 任务调度实现定时邮件的分发，用事件和事件监听器实现特殊情况触发紧急邮件发送功能
* 多队列实现各种情况事件的分批处理
* ...

### 用户 ###

为了更方便的使用系统，初始生成了测试用户 :

* Administrator : email = 327466897@qq.com, password = admin
* ...

