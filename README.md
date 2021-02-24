# php-process

PHP进程使用案例
案例说明：假设有120个任务需要执行（例如输出'Hello process'）,没输出一次需要休息1s,单进程执行的话可能需要2分钟，开启两个进程执行那么将会提高一倍的速度。

### 必要条件 ###
1.仅能在Linux下运行<br/>
2.确认开启了pcntl扩展， php -m | grep pcntl  <br/>

### 文件说明 ###
process.php  处理逻辑 <br/>
job.php  执行输出动作 <br/>


### 执行 ###
[root@www demo]# php process.php <br/>
pcntl_exec('/opt/remi/php72/root/bin/php', $cmds[$i]); => 将PHP路径替换为自己的路径<br/>

```
运行结果：
[root@www demo]# php process.php 
开始时间：09:31:49
No.61,Hello,Process
No.0,Hello,Process
No.62,Hello,Process
No.1,Hello,Process
No.63,Hello,Process
No.2,Hello,Process
No.64,Hello,Process
No.3,Hello,Process
No.65,Hello,Process
No.4,Hello,Process
No.66,Hello,Process
No.5,Hello,Process
No.67,Hello,Process
No.6,Hello,Process
No.68,Hello,Process
No.7,Hello,Process
No.69,Hello,Process
No.8,Hello,Process
No.70,Hello,Process
No.9,Hello,Process
No.71,Hello,Process
No.10,Hello,Process
No.72,Hello,Process
No.11,Hello,Process
No.73,Hello,Process
No.12,Hello,Process
No.74,Hello,Process
No.13,Hello,Process
No.75,Hello,Process
No.14,Hello,Process
No.76,Hello,Process
No.15,Hello,Process
No.77,Hello,Process
No.16,Hello,Process
No.78,Hello,Process
No.17,Hello,Process
No.79,Hello,Process
No.18,Hello,Process
No.80,Hello,Process
No.19,Hello,Process
No.81,Hello,Process
No.20,Hello,Process
No.82,Hello,Process
No.21,Hello,Process
No.83,Hello,Process
No.22,Hello,Process
No.84,Hello,Process
No.23,Hello,Process
No.85,Hello,Process
No.24,Hello,Process
No.86,Hello,Process
No.25,Hello,Process
No.87,Hello,Process
No.26,Hello,Process
No.88,Hello,Process
No.27,Hello,Process
No.89,Hello,Process
No.28,Hello,Process
No.90,Hello,Process
No.29,Hello,Process
No.91,Hello,Process
No.30,Hello,Process
No.92,Hello,Process
No.31,Hello,Process
No.93,Hello,Process
No.32,Hello,Process
No.94,Hello,Process
No.33,Hello,Process
No.95,Hello,Process
No.34,Hello,Process
No.96,Hello,Process
No.35,Hello,Process
No.97,Hello,Process
No.36,Hello,Process
No.98,Hello,Process
No.37,Hello,Process
No.99,Hello,Process
No.38,Hello,Process
No.100,Hello,Process
No.39,Hello,Process
No.101,Hello,Process
No.40,Hello,Process
No.102,Hello,Process
No.41,Hello,Process
No.103,Hello,Process
No.42,Hello,Process
No.104,Hello,Process
No.43,Hello,Process
No.105,Hello,Process
No.44,Hello,Process
No.106,Hello,Process
No.45,Hello,Process
No.107,Hello,Process
No.46,Hello,Process
No.108,Hello,Process
No.47,Hello,Process
No.109,Hello,Process
No.48,Hello,Process
No.110,Hello,Process
No.49,Hello,Process
No.111,Hello,Process
No.50,Hello,Process
No.112,Hello,Process
No.51,Hello,Process
No.113,Hello,Process
No.52,Hello,Process
No.114,Hello,Process
No.53,Hello,Process
No.115,Hello,Process
No.54,Hello,Process
No.116,Hello,Process
No.55,Hello,Process
No.117,Hello,Process
No.56,Hello,Process
No.118,Hello,Process
No.57,Hello,Process
No.119,Hello,Process
No.58,Hello,Process
No.59,Hello,Process
子进程结束时间：09:32:49
子进程结束时间：09:32:50
```

### 参考文件（转自） ###
https://segmentfault.com/a/1190000014735390?utm_source=tag-newest

进程之间是不能共享内存的，那么，进程间的通信怎么处理，请参考：
https://blog.csdn.net/kingandwede136/article/details/85047116
