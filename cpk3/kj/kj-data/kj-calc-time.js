exports.cqssc=function(data){
	var actionNo=data.number.substr(9,3)-(-1);
	
	if(actionNo>120) actionNo=120;
	
	var conf=["00:05", "00:10", "00:15", "00:20", "00:25", "00:30", "00:35", "00:40", "00:45", "00:50", "00:55", "01:00", "01:05", "01:10", "01:15", "01:20", "01:25", "01:30", "01:35", "01:40", "01:45", "01:50", "01:55", "10:00", "10:10", "10:20", "10:30", "10:40", "10:50", "11:00", "11:10", "11:20", "11:30", "11:40", "11:50", "12:00", "12:10", "12:20", "12:30", "12:40", "12:50", "13:00", "13:10", "13:20", "13:30", "13:40", "13:50", "14:00", "14:10", "14:20", "14:30", "14:40", "14:50", "15:00", "15:10", "15:20", "15:30", "15:40", "15:50", "16:00", "16:10", "16:20", "16:30", "16:40", "16:50", "17:00", "17:10", "17:20", "17:30", "17:40", "17:50", "18:00", "18:10", "18:20", "18:30", "18:40", "18:50", "19:00", "19:10", "19:20", "19:30", "19:40", "19:50", "20:00", "20:10", "20:20", "20:30", "20:40", "20:50", "21:00", "21:10", "21:20", "21:30", "21:40", "21:50", "22:00", "22:05", "22:10", "22:15", "22:20", "22:25", "22:30", "22:35", "22:40", "22:45", "22:50", "22:55", "23:00", "23:05", "23:10", "23:15", "23:20", "23:25", "23:30", "23:35", "23:40", "23:45", "23:50", "23:55", "00:00"];
	
	var d=conf[actionNo-1].split(':');
	var date=new Date();
	var time=date.getTime();
	var delay=10000;
	date.setSeconds(0);
	
	if(actionNo==120){
		//return delay;
		date.setDate(date.getDate()+1);
		date.setHours(0);
		date.setMinutes(0);
	}else{
		date.setHours(d[0]);
		date.setMinutes(d[1]);
	}
	
	var diffTime=date.getTime()-time;
	
	// �쳣����
	//console.log(diffTime/1000);
	if(actionNo!=24 && date.getTime()-time > 600000) return delay;
	return diffTime+delay;
}

exports.xjssc=function(data){
	var actionNo=data.number.substr(9,3)-(-1);
	var conf=["10:10","10:20","10:30","10:40","10:50","11:00","11:10","11:20","11:30","11:40","11:50","12:00","12:10", "12:20", "12:30", "12:40", "12:50", "13:00", "13:10", "13:20", "13:30", "13:40", "13:50", "14:00", "14:10", "14:20", "14:30", "14:40", "14:50", "15:00", "15:10", "15:20", "15:30", "15:40", "15:50", "16:00", "16:10", "16:20", "16:30", "16:40", "16:50", "17:00", "17:10", "17:20", "17:30", "17:40", "17:50", "18:00", "18:10", "18:20", "18:30", "18:40", "18:50", "19:00", "19:10", "19:20", "19:30", "19:40", "19:50", "20:00", "20:10", "20:20", "20:30", "20:40", "20:50", "21:00", "21:10", "21:20", "21:30", "21:40", "21:50", "22:00", "22:10", "22:20", "22:30", "22:40", "22:50", "23:00", "23:10", "23:20", "23:30", "23:40", "23:50", "00:00", "00:10", "00:20", "00:30", "00:40", "00:50", "01:00", "01:10", "01:20", "01:30", "01:40", "01:50", "02:00"];

	if(actionNo>=96) actionNo=1;
	var d=conf[actionNo-1].split(':');
	var date=new Date();
	var time=date.getTime();
	var delay=10000;
	date.setSeconds(0);
	
	if(actionNo==96 && date.getHours()==23){
		date.setDate(date.getDate()+1);
	}

	date.setHours(d[0]);
	date.setMinutes(d[1]);

	
	return date.getTime()-time+delay;
}

exports.tjssc=function(data){
	var actionNo=data.number.substr(9,3)-(-1);
	var conf=["09:10","09:20","09:30","09:40","09:50","10:00","10:10","10:20","10:30","10:40","10:50","11:00","11:10","11:20","11:30","11:40","11:50","12:00","12:10","12:20","12:30","12:40","12:50","13:00","13:10","13:20","13:30","13:40","13:50","14:00","14:10","14:20","14:30","14:40","14:50","15:00","15:10","15:20","15:30","15:40","15:50","16:00","16:10","16:20","16:30","16:40","16:50","17:00","17:10","17:20","17:30","17:40","17:50","18:00","18:10","18:20","18:30","18:40","18:50","19:00","19:10","19:20","19:30","19:40","19:50","20:00","20:10","20:20","20:30","20:40","20:50","21:00","21:10","21:20","21:30","21:40","21:50","22:00","22:10","22:20","22:30","22:40","22:50","23:00"];

	if(actionNo>=84) actionNo=1;
	//console.log(actionNo);
	var d=conf[actionNo-1].split(':');
	var date=new Date();
	var time=date.getTime();
	var delay=10000;
	date.setSeconds(0);
	date.setHours(d[0]);
	date.setMinutes(d[1]);

	
	return date.getTime()-time+delay;
}

exports.gdklsf=function(data){
	var actionNo=data.number.substr(9,3)-(-1);
	var conf=["09:10","09:20","09:30","09:40","09:50","10:00","10:10","10:20","10:30","10:40","10:50","11:00","11:10","11:20","11:30","11:40","11:50","12:00","12:10","12:20","12:30","12:40","12:50","13:00","13:10","13:20","13:30","13:40","13:50","14:00","14:10","14:20","14:30","14:40","14:50","15:00","15:10","15:20","15:30","15:40","15:50","16:00","16:10","16:20","16:30","16:40","16:50","17:00","17:10","17:20","17:30","17:40","17:50","18:00","18:10","18:20","18:30","18:40","18:50","19:00","19:10","19:20","19:30","19:40","19:50","20:00","20:10","20:20","20:30","20:40","20:50","21:00","21:10","21:20","21:30","21:40","21:50","22:00","22:10","22:20","22:30","22:40","22:50","23:00"];

	if(actionNo>=84) actionNo=1;
	//console.log(actionNo);
	var d=conf[actionNo-1].split(':');
	var date=new Date();
	var time=date.getTime();
	var delay=10000;
	date.setSeconds(0);
	date.setHours(d[0]);
	date.setMinutes(d[1]);

	return date.getTime()-time+delay;
}

exports.klsf=function(data){
	var actionNo=data.number.substr(9,3)-(-1);
	var conf=["00:03","00:13","00:23","00:33","00:43","00:53","01:03","01:13","01:23","01:33","01:43","01:53","02:03","10:03","10:13","10:23","10:33","10:43","10:53","11:03","11:13","11:23","11:33","11:43","11:53","12:03","12:13","12:23","12:33","12:43","12:53","13:03","13:13","13:23","13:33","13:43","13:53","14:03","14:13","14:23","14:33","14:43","14:53","15:03","15:13","15:23","15:33","15:43","15:53","16:03","16:13","16:23","16:33","16:43","16:53","17:03","17:13","17:23","17:33","17:43","17:53","18:03","18:13","18:23","18:33","18:43","18:53","19:03","19:13","19:23","19:33","19:43","19:53","20:03","20:13","20:23","20:33","20:43","20:53","21:03","21:13","21:23","21:33","21:43","21:53","22:03","22:13","22:23","22:33","22:43","22:53","23:03","23:13","23:23","23:33","23:43","23:53"];

	if(actionNo>=97) actionNo=1;
	//console.log(actionNo);
	var d=conf[actionNo-1].split(':');
	var date=new Date();
	var time=date.getTime();
	var delay=10000;
	date.setSeconds(0);
	date.setHours(d[0]);
	date.setMinutes(d[1]);

	
	return date.getTime()-time+delay;
}

exports.jxssc=function(data){
	var actionNo=data.number.substr(9,3)-(-1);
	var conf=["09:10","09:20","09:30","09:41","09:51","10:01","10:11","10:21","10:31","10:41","10:51","11:02","11:12","11:22","11:32","11:42","11:52","12:02","12:13","12:22","12:33","12:43","12:53","13:03","13:13","13:24","13:34","13:44","13:54","14:04","14:14","14:24","14:35","14:44","14:55","15:05","15:15","15:25","15:35","15:45","15:56","16:06","16:16","16:26","16:36","16:46","16:56","17:07","17:17","17:27","17:37","17:47","17:57","18:07","18:18","18:28","18:38","18:48","18:58","19:08","19:18","19:28","19:39","19:49","19:59","20:09","20:19","20:29","20:40","20:50","21:00","21:10","21:20","21:30","21:41","21:51","22:01","22:11","22:21","22:31","22:42","22:52","23:02","23:12"];

	if(actionNo>=84) actionNo=1;
	//console.log(actionNo);
	var d=conf[actionNo-1].split(':');
	var date=new Date();
	var time=date.getTime();
	var delay=10000;
	date.setSeconds(0);
	date.setHours(d[0]);
	date.setMinutes(d[1]);

	
	return date.getTime()-time+delay;
}
exports.cq11x5=function(data){
	var actionNo=data.number.substr(9,3)-(-1);
	var conf=["09:00","09:10","09:20","09:30","09:40","09:50","10:00","10:10","10:20","10:30","10:40","10:50","11:00","11:10","11:20","11:30","11:40","11:50","12:00","12:10","12:20","12:30","12:40","12:50","13:00","13:10","13:20","13:30","13:40","13:50","14:00","14:10","14:20","14:30","14:40","14:50","15:00","15:10","15:20","15:30","15:40","15:50","16:00","16:10","16:20","16:30","16:40","16:50","17:00","17:10","17:20","17:30","17:40","17:50","18:00","18:10","18:20","18:30","18:40","18:50","19:00","19:10","19:20","19:30","19:40","19:50","20:00","20:10","20:20","20:30","20:40","20:50","21:00","21:10","21:20","21:30","21:40","21:50","22:00","22:10","22:20","22:30","22:40","22:50","23:00"];

	if(actionNo>=85) actionNo=1;
	//console.log(actionNo);
	var d=conf[actionNo-1].split(':');
	var date=new Date();
	var time=date.getTime();
	var delay=10000;
	date.setSeconds(0);
	date.setHours(d[0]);
	date.setMinutes(d[1]);

	
	return date.getTime()-time+delay;
}
exports.jx11x5=function(data){
	var actionNo=data.number.substr(9,3)-(-1);
	var conf=["09:10","09:20","09:30","09:40","09:50","10:00","10:10","10:20","10:30","10:40","10:50","11:00","11:10","11:20","11:30","11:40","11:50","12:00","12:10","12:20","12:30","12:40","12:50","13:00","13:10","13:20","13:30","13:40","13:50","14:00","14:10","14:20","14:30","14:40","14:50","15:00","15:10","15:20","15:30","15:40","15:50","16:00","16:10","16:20","16:30","16:40","16:50","17:00","17:10","17:20","17:30","17:40","17:50","18:00","18:10","18:20","18:30","18:40","18:50","19:00","19:10","19:20","19:30","19:40","19:50","20:00","20:10","20:20","20:30","20:40","20:50","21:00","21:10","21:20","21:30","21:40","21:50","22:00"];

	if(actionNo>=78) actionNo=1;
	//console.log(actionNo);
	var d=conf[actionNo-1].split(':');
	var date=new Date();
	var time=date.getTime();
	var delay=10000;
	date.setSeconds(0);
	date.setHours(d[0]);
	date.setMinutes(d[1]);

	
	return date.getTime()-time+delay;
}

exports.gd11x5=exports.tjssc;

exports.sd11x5=function(data){
	var actionNo=data.number.substr(9,3)-(-1);
	var conf=["9:05","9:15","9:25","9:35","9:45","9:55","10:05","10:15","10:25","10:35","10:45","10:55","11:05","11:15","11:25","11:35","11:45","11:55","12:05","12:15","12:25","12:35","12:45","12:55","13:05","13:15","13:25","13:35","13:45","13:55","14:05","14:15","14:25","14:35","14:45","14:55","15:05","15:15","15:25","15:35","15:45","15:55","16:05","16:15","16:25","16:35","16:45","16:55","17:05","17:15","17:25","17:35","17:45","17:55","18:05","18:15","18:25","18:35","18:45","18:55","19:05","19:15","19:25","19:35","19:45","19:55","20:05","20:15","20:25","20:35","20:45","20:55","21:05","21:15","21:25","21:35","21:45","21:55"];

	if(actionNo>=78) actionNo=1;
	//console.log(actionNo);
	var d=conf[actionNo-1].split(':');
	var date=new Date();
	var time=date.getTime();
	var delay=10000;
	date.setSeconds(0);
	date.setHours(d[0]);
	date.setMinutes(d[1]);

	
	return date.getTime()-time+delay;
}


exports.fc3d=function(data){
	var date=new Date(),
	time=date.getTime(),
	delay=100000;
	
	date.setSeconds(0);
	date.setHours(18);
	date.setMinutes(30);
	
	return date.getTime()-time+delay;
}

exports.pai3=exports.fc3d;

exports.bjpk10=function(data){
	var actionNo=data.number.substr(9,3)-(-1);
	var conf=["09:05","09:10","09:15","09:20","09:25","09:30","09:35","09:40","09:45","09:50","09:55","10:00","10:05","10:10","10:15","10:20","10:25","10:30","10:35","10:40","10:45","10:50","10:55","11:00","11:05","11:10","11:15","11:20","11:25","11:30","11:35","11:40","11:45","11:50","11:55","12:00","12:05","12:10","12:15","12:20","12:25","12:30","12:35","12:40","12:45","12:50","12:55","13:00","13:05","13:10","13:15","13:20","13:25","13:30","13:35","13:40","13:45","13:50","13:55","14:00","14:05","14:10","14:15","14:20","14:25","14:30","14:35","14:40","14:45","14:50","14:55","15:00","15:05","15:10","15:15","15:20","15:25","15:30","15:35","15:40","15:45","15:50","15:55","16:00","16:05","16:10","16:15","16:20","16:25","16:30","16:35","16:40","16:45","16:50","16:55","17:00","17:05","17:10","17:15","17:20","17:25","17:30","17:35","17:40","17:45","17:50","17:55","18:00","18:05","18:10","18:15","18:20","18:25","18:30","18:35","18:40","18:45","18:50","18:55","19:00","19:05","19:10","19:15","19:20","19:25","19:30","19:35","19:40","19:45","19:50","19:55","20:00","20:05","20:10","20:15","20:20","20:25","20:30","20:35","20:40","20:45","20:50","20:55","21:00","21:05","21:10","21:15","21:20","21:25","21:30","21:35","21:40","21:45","21:50","21:55","22:00","22:05","22:10","22:15","22:20","22:25","22:30","22:35","22:40","22:45","22:50","22:55","23:00","23:05","23:10","23:15","23:20","23:25","23:30","23:35","23:40","23:45","23:50","23:55"];

	if(actionNo>=179) actionNo=1;
	//console.log(actionNo);
	var d=conf[actionNo-1].split(':');
	var date=new Date();
	var time=date.getTime();
	var delay=5000;
	date.setSeconds(0);
	date.setHours(d[0]);
	date.setMinutes(d[1]);

	
	return date.getTime()-time+delay;
}

exports.bjk8=exports.bjpk10

exports.gxk3=function(data){
	var actionNo=data.number.substr(9,3)-(-1);
	var conf=["08:40","08:50","09:00","09:10","09:20","09:30","09:40","09:50","10:00","10:10","10:20","10:30","10:40","10:50","11:00","11:10","11:20","11:30","11:40","11:50","12:00","12:10","12:20","12:30","12:40","12:50","13:00","13:10","13:20","13:30","13:40","13:50","14:00","14:10","14:20","14:30","14:40","14:50","15:00","15:10","15:20","15:30","15:40","15:50","16:00","16:10","16:20","16:30","16:40","16:50","17:00","17:10","17:20","17:30","17:40","17:50","18:00","18:10","18:20","18:30","18:40","18:50","19:00","19:10","19:20","19:30","19:40","19:50","20:00","20:10","20:20","20:30","20:40","20:50","21:00","21:10","21:20","21:30","21:40","21:50","22:00","22:10"];

	if(actionNo>=82) actionNo=1;
	//console.log(actionNo);
	var d=conf[actionNo-1].split(':');
	var date=new Date();
	var time=date.getTime();
	var delay=10000;
	date.setSeconds(0);
	date.setHours(d[0]);
	date.setMinutes(d[1]);

	
	return date.getTime()-time+delay;
	//return 30000;
}

exports.jsk3=function(data){
	var actionNo=data.number.substr(9,3)-(-1);
	var conf=["08:40","08:50","09:00","09:10","09:20","09:30","09:40","09:50","10:00","10:10","10:20","10:30","10:40","10:50","11:00","11:10","11:20","11:30","11:40","11:50","12:00","12:10","12:20","12:30","12:40","12:50","13:00","13:10","13:20","13:30","13:40","13:50","14:00","14:10","14:20","14:30","14:40","14:50","15:00","15:10","15:20","15:30","15:40","15:50","16:00","16:10","16:20","16:30","16:40","16:50","17:00","17:10","17:20","17:30","17:40","17:50","18:00","18:10","18:20","18:30","18:40","18:50","19:00","19:10","19:20","19:30","19:40","19:50","20:00","20:10","20:20","20:30","20:40","20:50","21:00","21:10","21:20","21:30","21:40","21:50","22:00","22:10"];

	if(actionNo>=82) actionNo=1;
	//console.log(actionNo);
	var d=conf[actionNo-1].split(':');
	var date=new Date();
	var time=date.getTime();
	var delay=10000;
	date.setSeconds(0);
	date.setHours(d[0]);
	date.setMinutes(d[1]);

	
	return date.getTime()-time+delay;
	//return 30000;
}

exports.qtllc=function(data){ //ȫ�����ֲ�  ��ֲ�

	var actionNo=data.number.substr(9,3)-(-1);
	var conf=["00:01","00:06", "00:11", "00:16", "00:21", "00:26", "00:31", "00:36", "00:41", "00:46", "00:51", "00:56", "01:01", "01:06", "01:11", "01:16", "01:21", "01:26", "01:31", "01:36", "01:41", "01:46", "01:51", "01:56", "02:01", "02:06", "02:11", "02:16", "02:21", "02:26", "02:31", "02:36", "02:41", "02:46", "02:51", "02:56", "03:01", "03:06", "03:11", "03:16", "03:21", "03:26", "03:31", "03:36", "03:41", "03:46", "03:51", "03:56", "04:01", "04:06", "04:11", "04:16", "04:21", "04:26", "04:31", "04:36", "04:41", "04:46", "04:51", "04:56", "05:01", "05:06", "05:11", "05:16", "05:21", "05:26", "05:31", "05:36", "05:41", "05:46", "05:51", "05:56", "06:01", "06:06", "06:11", "06:16", "06:21", "06:26", "06:31", "06:36", "06:41", "06:46", "06:51", "06:56", "07:01", "07:06", "07:11", "07:16", "07:21", "07:26", "07:31", "07:36", "07:41", "07:46", "07:51", "07:56", "08:01", "08:06", "08:11", "08:16", "08:21", "08:26", "08:31", "08:36", "08:41", "08:46", "08:51", "08:56", "09:01", "09:06", "09:11", "09:16", "09:21", "09:26", "09:31", "09:36", "09:41", "09:46", "09:51", "09:56", "10:01", "10:06", "10:11", "10:16", "10:21", "10:26", "10:31", "10:36", "10:41", "10:46", "10:51", "10:56", "11:01", "11:06", "11:11", "11:16", "11:21", "11:26", "11:31", "11:36", "11:41", "11:46", "11:51", "11:56", "12:01", "12:06", "12:11", "12:16", "12:21", "12:26", "12:31", "12:36", "12:41", "12:46", "12:51", "12:56", "13:01", "13:06", "13:11", "13:16", "13:21", "13:26", "13:31", "13:36", "13:41", "13:46", "13:51", "13:56", "14:01", "14:06", "14:11", "14:16", "14:21", "14:26", "14:31", "14:36", "14:41", "14:46", "14:51", "14:56", "15:01", "15:06", "15:11", "15:16", "15:21", "15:26", "15:31", "15:36", "15:41", "15:46", "15:51", "15:56", "16:01", "16:06", "16:11", "16:16", "16:21", "16:26", "16:31", "16:36", "16:41", "16:46", "16:51", "16:56", "17:01", "17:06", "17:11", "17:16", "17:21", "17:26", "17:31", "17:36", "17:41", "17:46", "17:51", "17:56", "18:01", "18:06", "18:11", "18:16", "18:21", "18:26", "18:31", "18:36", "18:41", "18:46", "18:51", "18:56", "19:01", "19:06", "19:11", "19:16", "19:21", "19:26", "19:31", "19:36", "19:41", "19:46", "19:51", "19:56", "20:01", "20:06", "20:11", "20:16", "20:21", "20:26", "20:31", "20:36", "20:41", "20:46", "20:51", "20:56", "21:01", "21:06", "21:11", "21:16", "21:21", "21:26", "21:31", "21:36", "21:41", "21:46", "21:51", "21:56", "22:01", "22:06", "22:11", "22:16", "22:21", "22:26", "22:31", "22:36", "22:41", "22:46", "22:51", "22:56", "23:01", "23:06", "23:11", "23:16", "23:21", "23:26", "23:31", "23:36", "23:41", "23:46", "23:51", "23:56"];
	
	if(actionNo>=288) actionNo=1;
	//console.log(actionNo);
	var d=conf[actionNo-1].split(':');
	var date=new Date();
	var time=date.getTime();
	var delay=10000;
	date.setSeconds(0);
	date.setHours(d[0]);
	date.setMinutes(d[1]);
	return 50000;  //50���
}

exports.lfc=function(data){
	var actionNo=data.number.substr(9,3)-(-1);
	var conf=["0:02:00","0:04:00","0:06:00","0:08:00","0:10:00","0:12:00","0:14:00","0:16:00","0:18:00","0:20:00","0:22:00","0:24:00","0:26:00","0:28:00","0:30:00","0:32:00","0:34:00","0:36:00","0:38:00","0:40:00","0:42:00","0:44:00","0:46:00","0:48:00","0:50:00","0:52:00","0:54:00","0:56:00","0:58:00","1:00:00","1:02:00","1:04:00","1:06:00","1:08:00","1:10:00","1:12:00","1:14:00","1:16:00","1:18:00","1:20:00","1:22:00","1:24:00","1:26:00","1:28:00","1:30:00","1:32:00","1:34:00","1:36:00","1:38:00","1:40:00","1:42:00","1:44:00","1:46:00","1:48:00","1:50:00","1:52:00","1:54:00","1:56:00","1:58:00","2:00:00","2:02:00","2:04:00","2:06:00","2:08:00","2:10:00","2:12:00","2:14:00","2:16:00","2:18:00","2:20:00","2:22:00","2:24:00","2:26:00","2:28:00","2:30:00","2:32:00","2:34:00","2:36:00","2:38:00","2:40:00","2:42:00","2:44:00","2:46:00","2:48:00","2:50:00","2:52:00","2:54:00","2:56:00","2:58:00","3:00:00","3:02:00","3:04:00","3:06:00","3:08:00","3:10:00","3:12:00","3:14:00","3:16:00","3:18:00","3:20:00","3:22:00","3:24:00","3:26:00","3:28:00","3:30:00","3:32:00","3:34:00","3:36:00","3:38:00","3:40:00","3:42:00","3:44:00","3:46:00","3:48:00","3:50:00","3:52:00","3:54:00","3:56:00","3:58:00","4:00:00","4:02:00","4:04:00","4:06:00","4:08:00","4:10:00","4:12:00","4:14:00","4:16:00","4:18:00","4:20:00","4:22:00","4:24:00","4:26:00","4:28:00","4:30:00","4:32:00","4:34:00","4:36:00","4:38:00","4:40:00","4:42:00","4:44:00","4:46:00","4:48:00","4:50:00","4:52:00","4:54:00","4:56:00","4:58:00","5:00:00","5:02:00","5:04:00","5:06:00","5:08:00","5:10:00","5:12:00","5:14:00","5:16:00","5:18:00","5:20:00","5:22:00","5:24:00","5:26:00","5:28:00","5:30:00","5:32:00","5:34:00","5:36:00","5:38:00","5:40:00","5:42:00","5:44:00","5:46:00","5:48:00","5:50:00","5:52:00","5:54:00","5:56:00","5:58:00","6:00:00","6:02:00","6:04:00","6:06:00","6:08:00","6:10:00","6:12:00","6:14:00","6:16:00","6:18:00","6:20:00","6:22:00","6:24:00","6:26:00","6:28:00","6:30:00","6:32:00","6:34:00","6:36:00","6:38:00","6:40:00","6:42:00","6:44:00","6:46:00","6:48:00","6:50:00","6:52:00","6:54:00","6:56:00","6:58:00","7:00:00","7:02:00","7:04:00","7:06:00","7:08:00","7:10:00","7:12:00","7:14:00","7:16:00","7:18:00","7:20:00","7:22:00","7:24:00","7:26:00","7:28:00","7:30:00","7:32:00","7:34:00","7:36:00","7:38:00","7:40:00","7:42:00","7:44:00","7:46:00","7:48:00","7:50:00","7:52:00","7:54:00","7:56:00","7:58:00","8:00:00","8:02:00","8:04:00","8:06:00","8:08:00","8:10:00","8:12:00","8:14:00","8:16:00","8:18:00","8:20:00","8:22:00","8:24:00","8:26:00","8:28:00","8:30:00","8:32:00","8:34:00","8:36:00","8:38:00","8:40:00","8:42:00","8:44:00","8:46:00","8:48:00","8:50:00","8:52:00","8:54:00","8:56:00","8:58:00","9:00:00","9:02:00","9:04:00","9:06:00","9:08:00","9:10:00","9:12:00","9:14:00","9:16:00","9:18:00","9:20:00","9:22:00","9:24:00","9:26:00","9:28:00","9:30:00","9:32:00","9:34:00","9:36:00","9:38:00","9:40:00","9:42:00","9:44:00","9:46:00","9:48:00","9:50:00","9:52:00","9:54:00","9:56:00","9:58:00","10:00:00","10:02:00","10:04:00","10:06:00","10:08:00","10:10:00","10:12:00","10:14:00","10:16:00","10:18:00","10:20:00","10:22:00","10:24:00","10:26:00","10:28:00","10:30:00","10:32:00","10:34:00","10:36:00","10:38:00","10:40:00","10:42:00","10:44:00","10:46:00","10:48:00","10:50:00","10:52:00","10:54:00","10:56:00","10:58:00","11:00:00","11:02:00","11:04:00","11:06:00","11:08:00","11:10:00","11:12:00","11:14:00","11:16:00","11:18:00","11:20:00","11:22:00","11:24:00","11:26:00","11:28:00","11:30:00","11:32:00","11:34:00","11:36:00","11:38:00","11:40:00","11:42:00","11:44:00","11:46:00","11:48:00","11:50:00","11:52:00","11:54:00","11:56:00","11:58:00","12:00:00","12:02:00","12:04:00","12:06:00","12:08:00","12:10:00","12:12:00","12:14:00","12:16:00","12:18:00","12:20:00","12:22:00","12:24:00","12:26:00","12:28:00","12:30:00","12:32:00","12:34:00","12:36:00","12:38:00","12:40:00","12:42:00","12:44:00","12:46:00","12:48:00","12:50:00","12:52:00","12:54:00","12:56:00","12:58:00","13:00:00","13:02:00","13:04:00","13:06:00","13:08:00","13:10:00","13:12:00","13:14:00","13:16:00","13:18:00","13:20:00","13:22:00","13:24:00","13:26:00","13:28:00","13:30:00","13:32:00","13:34:00","13:36:00","13:38:00","13:40:00","13:42:00","13:44:00","13:46:00","13:48:00","13:50:00","13:52:00","13:54:00","13:56:00","13:58:00","14:00:00","14:02:00","14:04:00","14:06:00","14:08:00","14:10:00","14:12:00","14:14:00","14:16:00","14:18:00","14:20:00","14:22:00","14:24:00","14:26:00","14:28:00","14:30:00","14:32:00","14:34:00","14:36:00","14:38:00","14:40:00","14:42:00","14:44:00","14:46:00","14:48:00","14:50:00","14:52:00","14:54:00","14:56:00","14:58:00","15:00:00","15:02:00","15:04:00","15:06:00","15:08:00","15:10:00","15:12:00","15:14:00","15:16:00","15:18:00","15:20:00","15:22:00","15:24:00","15:26:00","15:28:00","15:30:00","15:32:00","15:34:00","15:36:00","15:38:00","15:40:00","15:42:00","15:44:00","15:46:00","15:48:00","15:50:00","15:52:00","15:54:00","15:56:00","15:58:00","16:00:00","16:02:00","16:04:00","16:06:00","16:08:00","16:10:00","16:12:00","16:14:00","16:16:00","16:18:00","16:20:00","16:22:00","16:24:00","16:26:00","16:28:00","16:30:00","16:32:00","16:34:00","16:36:00","16:38:00","16:40:00","16:42:00","16:44:00","16:46:00","16:48:00","16:50:00","16:52:00","16:54:00","16:56:00","16:58:00","17:00:00","17:02:00","17:04:00","17:06:00","17:08:00","17:10:00","17:12:00","17:14:00","17:16:00","17:18:00","17:20:00","17:22:00","17:24:00","17:26:00","17:28:00","17:30:00","17:32:00","17:34:00","17:36:00","17:38:00","17:40:00","17:42:00","17:44:00","17:46:00","17:48:00","17:50:00","17:52:00","17:54:00","17:56:00","17:58:00","18:00:00","18:02:00","18:04:00","18:06:00","18:08:00","18:10:00","18:12:00","18:14:00","18:16:00","18:18:00","18:20:00","18:22:00","18:24:00","18:26:00","18:28:00","18:30:00","18:32:00","18:34:00","18:36:00","18:38:00","18:40:00","18:42:00","18:44:00","18:46:00","18:48:00","18:50:00","18:52:00","18:54:00","18:56:00","18:58:00","19:00:00","19:02:00","19:04:00","19:06:00","19:08:00","19:10:00","19:12:00","19:14:00","19:16:00","19:18:00","19:20:00","19:22:00","19:24:00","19:26:00","19:28:00","19:30:00","19:32:00","19:34:00","19:36:00","19:38:00","19:40:00","19:42:00","19:44:00","19:46:00","19:48:00","19:50:00","19:52:00","19:54:00","19:56:00","19:58:00","20:00:00","20:02:00","20:04:00","20:06:00","20:08:00","20:10:00","20:12:00","20:14:00","20:16:00","20:18:00","20:20:00","20:22:00","20:24:00","20:26:00","20:28:00","20:30:00","20:32:00","20:34:00","20:36:00","20:38:00","20:40:00","20:42:00","20:44:00","20:46:00","20:48:00","20:50:00","20:52:00","20:54:00","20:56:00","20:58:00","21:00:00","21:02:00","21:04:00","21:06:00","21:08:00","21:10:00","21:12:00","21:14:00","21:16:00","21:18:00","21:20:00","21:22:00","21:24:00","21:26:00","21:28:00","21:30:00","21:32:00","21:34:00","21:36:00","21:38:00","21:40:00","21:42:00","21:44:00","21:46:00","21:48:00","21:50:00","21:52:00","21:54:00","21:56:00","21:58:00","22:00:00","22:02:00","22:04:00","22:06:00","22:08:00","22:10:00","22:12:00","22:14:00","22:16:00","22:18:00","22:20:00","22:22:00","22:24:00","22:26:00","22:28:00","22:30:00","22:32:00","22:34:00","22:36:00","22:38:00","22:40:00","22:42:00","22:44:00","22:46:00","22:48:00","22:50:00","22:52:00","22:54:00","22:56:00","22:58:00","23:00:00","23:02:00","23:04:00","23:06:00","23:08:00","23:10:00","23:12:00","23:14:00","23:16:00","23:18:00","23:20:00","23:22:00","23:24:00","23:26:00","23:28:00","23:30:00","23:32:00","23:34:00","23:36:00","23:38:00","23:40:00","23:42:00","23:44:00","23:46:00","23:48:00","23:50:00","23:52:00","23:54:00","23:56:00","23:58:00","23:59:59"];

	if(actionNo>=720) actionNo=1;
	var d=conf[actionNo-1].split(':');
	var date=new Date();
	var time=date.getTime();
	var delay=10000;
	date.setSeconds(0);
	date.setHours(d[0]);
	date.setMinutes(d[1]);
	return 30000;  //30���
}

exports.ffc=function(data){
	var actionNo=data.number.substr(9,3)-(-1);
	var conf=["0:01","0:02","0:03","0:04","0:05","0:06","0:07","0:08","0:09","0:10","0:11","0:12","0:13","0:14","0:15","0:16","0:17","0:18","0:19","0:20","0:21","0:22","0:23","0:24","0:25","0:26","0:27","0:28","0:29","0:30","0:31","0:32","0:33","0:34","0:35","0:36","0:37","0:38","0:39","0:40","0:41","0:42","0:43","0:44","0:45","0:46","0:47","0:48","0:49","0:50","0:51","0:52","0:53","0:54","0:55","0:56","0:57","0:58","0:59","1:00","1:01","1:02","1:03","1:04","1:05","1:06","1:07","1:08","1:09","1:10","1:11","1:12","1:13","1:14","1:15","1:16","1:17","1:18","1:19","1:20","1:21","1:22","1:23","1:24","1:25","1:26","1:27","1:28","1:29","1:30","1:31","1:32","1:33","1:34","1:35","1:36","1:37","1:38","1:39","1:40","1:41","1:42","1:43","1:44","1:45","1:46","1:47","1:48","1:49","1:50","1:51","1:52","1:53","1:54","1:55","1:56","1:57","1:58","1:59","2:00","2:01","2:02","2:03","2:04","2:05","2:06","2:07","2:08","2:09","2:10","2:11","2:12","2:13","2:14","2:15","2:16","2:17","2:18","2:19","2:20","2:21","2:22","2:23","2:24","2:25","2:26","2:27","2:28","2:29","2:30","2:31","2:32","2:33","2:34","2:35","2:36","2:37","2:38","2:39","2:40","2:41","2:42","2:43","2:44","2:45","2:46","2:47","2:48","2:49","2:50","2:51","2:52","2:53","2:54","2:55","2:56","2:57","2:58","2:59","3:00","3:01","3:02","3:03","3:04","3:05","3:06","3:07","3:08","3:09","3:10","3:11","3:12","3:13","3:14","3:15","3:16","3:17","3:18","3:19","3:20","3:21","3:22","3:23","3:24","3:25","3:26","3:27","3:28","3:29","3:30","3:31","3:32","3:33","3:34","3:35","3:36","3:37","3:38","3:39","3:40","3:41","3:42","3:43","3:44","3:45","3:46","3:47","3:48","3:49","3:50","3:51","3:52","3:53","3:54","3:55","3:56","3:57","3:58","3:59","4:00","4:01","4:02","4:03","4:04","4:05","4:06","4:07","4:08","4:09","4:10","4:11","4:12","4:13","4:14","4:15","4:16","4:17","4:18","4:19","4:20","4:21","4:22","4:23","4:24","4:25","4:26","4:27","4:28","4:29","4:30","4:31","4:32","4:33","4:34","4:35","4:36","4:37","4:38","4:39","4:40","4:41","4:42","4:43","4:44","4:45","4:46","4:47","4:48","4:49","4:50","4:51","4:52","4:53","4:54","4:55","4:56","4:57","4:58","4:59","5:00","5:01","5:02","5:03","5:04","5:05","5:06","5:07","5:08","5:09","5:10","5:11","5:12","5:13","5:14","5:15","5:16","5:17","5:18","5:19","5:20","5:21","5:22","5:23","5:24","5:25","5:26","5:27","5:28","5:29","5:30","5:31","5:32","5:33","5:34","5:35","5:36","5:37","5:38","5:39","5:40","5:41","5:42","5:43","5:44","5:45","5:46","5:47","5:48","5:49","5:50","5:51","5:52","5:53","5:54","5:55","5:56","5:57","5:58","5:59","6:00","6:01","6:02","6:03","6:04","6:05","6:06","6:07","6:08","6:09","6:10","6:11","6:12","6:13","6:14","6:15","6:16","6:17","6:18","6:19","6:20","6:21","6:22","6:23","6:24","6:25","6:26","6:27","6:28","6:29","6:30","6:31","6:32","6:33","6:34","6:35","6:36","6:37","6:38","6:39","6:40","6:41","6:42","6:43","6:44","6:45","6:46","6:47","6:48","6:49","6:50","6:51","6:52","6:53","6:54","6:55","6:56","6:57","6:58","6:59","7:00","7:01","7:02","7:03","7:04","7:05","7:06","7:07","7:08","7:09","7:10","7:11","7:12","7:13","7:14","7:15","7:16","7:17","7:18","7:19","7:20","7:21","7:22","7:23","7:24","7:25","7:26","7:27","7:28","7:29","7:30","7:31","7:32","7:33","7:34","7:35","7:36","7:37","7:38","7:39","7:40","7:41","7:42","7:43","7:44","7:45","7:46","7:47","7:48","7:49","7:50","7:51","7:52","7:53","7:54","7:55","7:56","7:57","7:58","7:59","8:00","8:01","8:02","8:03","8:04","8:05","8:06","8:07","8:08","8:09","8:10","8:11","8:12","8:13","8:14","8:15","8:16","8:17","8:18","8:19","8:20","8:21","8:22","8:23","8:24","8:25","8:26","8:27","8:28","8:29","8:30","8:31","8:32","8:33","8:34","8:35","8:36","8:37","8:38","8:39","8:40","8:41","8:42","8:43","8:44","8:45","8:46","8:47","8:48","8:49","8:50","8:51","8:52","8:53","8:54","8:55","8:56","8:57","8:58","8:59","9:00","9:01","9:02","9:03","9:04","9:05","9:06","9:07","9:08","9:09","9:10","9:11","9:12","9:13","9:14","9:15","9:16","9:17","9:18","9:19","9:20","9:21","9:22","9:23","9:24","9:25","9:26","9:27","9:28","9:29","9:30","9:31","9:32","9:33","9:34","9:35","9:36","9:37","9:38","9:39","9:40","9:41","9:42","9:43","9:44","9:45","9:46","9:47","9:48","9:49","9:50","9:51","9:52","9:53","9:54","9:55","9:56","9:57","9:58","9:59","10:00","10:01","10:02","10:03","10:04","10:05","10:06","10:07","10:08","10:09","10:10","10:11","10:12","10:13","10:14","10:15","10:16","10:17","10:18","10:19","10:20","10:21","10:22","10:23","10:24","10:25","10:26","10:27","10:28","10:29","10:30","10:31","10:32","10:33","10:34","10:35","10:36","10:37","10:38","10:39","10:40","10:41","10:42","10:43","10:44","10:45","10:46","10:47","10:48","10:49","10:50","10:51","10:52","10:53","10:54","10:55","10:56","10:57","10:58","10:59","11:00","11:01","11:02","11:03","11:04","11:05","11:06","11:07","11:08","11:09","11:10","11:11","11:12","11:13","11:14","11:15","11:16","11:17","11:18","11:19","11:20","11:21","11:22","11:23","11:24","11:25","11:26","11:27","11:28","11:29","11:30","11:31","11:32","11:33","11:34","11:35","11:36","11:37","11:38","11:39","11:40","11:41","11:42","11:43","11:44","11:45","11:46","11:47","11:48","11:49","11:50","11:51","11:52","11:53","11:54","11:55","11:56","11:57","11:58","11:59","12:00","12:01","12:02","12:03","12:04","12:05","12:06","12:07","12:08","12:09","12:10","12:11","12:12","12:13","12:14","12:15","12:16","12:17","12:18","12:19","12:20","12:21","12:22","12:23","12:24","12:25","12:26","12:27","12:28","12:29","12:30","12:31","12:32","12:33","12:34","12:35","12:36","12:37","12:38","12:39","12:40","12:41","12:42","12:43","12:44","12:45","12:46","12:47","12:48","12:49","12:50","12:51","12:52","12:53","12:54","12:55","12:56","12:57","12:58","12:59","13:00","13:01","13:02","13:03","13:04","13:05","13:06","13:07","13:08","13:09","13:10","13:11","13:12","13:13","13:14","13:15","13:16","13:17","13:18","13:19","13:20","13:21","13:22","13:23","13:24","13:25","13:26","13:27","13:28","13:29","13:30","13:31","13:32","13:33","13:34","13:35","13:36","13:37","13:38","13:39","13:40","13:41","13:42","13:43","13:44","13:45","13:46","13:47","13:48","13:49","13:50","13:51","13:52","13:53","13:54","13:55","13:56","13:57","13:58","13:59","14:00","14:01","14:02","14:03","14:04","14:05","14:06","14:07","14:08","14:09","14:10","14:11","14:12","14:13","14:14","14:15","14:16","14:17","14:18","14:19","14:20","14:21","14:22","14:23","14:24","14:25","14:26","14:27","14:28","14:29","14:30","14:31","14:32","14:33","14:34","14:35","14:36","14:37","14:38","14:39","14:40","14:41","14:42","14:43","14:44","14:45","14:46","14:47","14:48","14:49","14:50","14:51","14:52","14:53","14:54","14:55","14:56","14:57","14:58","14:59","15:00","15:01","15:02","15:03","15:04","15:05","15:06","15:07","15:08","15:09","15:10","15:11","15:12","15:13","15:14","15:15","15:16","15:17","15:18","15:19","15:20","15:21","15:22","15:23","15:24","15:25","15:26","15:27","15:28","15:29","15:30","15:31","15:32","15:33","15:34","15:35","15:36","15:37","15:38","15:39","15:40","15:41","15:42","15:43","15:44","15:45","15:46","15:47","15:48","15:49","15:50","15:51","15:52","15:53","15:54","15:55","15:56","15:57","15:58","15:59","16:00","16:01","16:02","16:03","16:04","16:05","16:06","16:07","16:08","16:09","16:10","16:11","16:12","16:13","16:14","16:15","16:16","16:17","16:18","16:19","16:20","16:21","16:22","16:23","16:24","16:25","16:26","16:27","16:28","16:29","16:30","16:31","16:32","16:33","16:34","16:35","16:36","16:37","16:38","16:39","16:40","16:41","16:42","16:43","16:44","16:45","16:46","16:47","16:48","16:49","16:50","16:51","16:52","16:53","16:54","16:55","16:56","16:57","16:58","16:59","17:00","17:01","17:02","17:03","17:04","17:05","17:06","17:07","17:08","17:09","17:10","17:11","17:12","17:13","17:14","17:15","17:16","17:17","17:18","17:19","17:20","17:21","17:22","17:23","17:24","17:25","17:26","17:27","17:28","17:29","17:30","17:31","17:32","17:33","17:34","17:35","17:36","17:37","17:38","17:39","17:40","17:41","17:42","17:43","17:44","17:45","17:46","17:47","17:48","17:49","17:50","17:51","17:52","17:53","17:54","17:55","17:56","17:57","17:58","17:59","18:00","18:01","18:02","18:03","18:04","18:05","18:06","18:07","18:08","18:09","18:10","18:11","18:12","18:13","18:14","18:15","18:16","18:17","18:18","18:19","18:20","18:21","18:22","18:23","18:24","18:25","18:26","18:27","18:28","18:29","18:30","18:31","18:32","18:33","18:34","18:35","18:36","18:37","18:38","18:39","18:40","18:41","18:42","18:43","18:44","18:45","18:46","18:47","18:48","18:49","18:50","18:51","18:52","18:53","18:54","18:55","18:56","18:57","18:58","18:59","19:00","19:01","19:02","19:03","19:04","19:05","19:06","19:07","19:08","19:09","19:10","19:11","19:12","19:13","19:14","19:15","19:16","19:17","19:18","19:19","19:20","19:21","19:22","19:23","19:24","19:25","19:26","19:27","19:28","19:29","19:30","19:31","19:32","19:33","19:34","19:35","19:36","19:37","19:38","19:39","19:40","19:41","19:42","19:43","19:44","19:45","19:46","19:47","19:48","19:49","19:50","19:51","19:52","19:53","19:54","19:55","19:56","19:57","19:58","19:59","20:00","20:01","20:02","20:03","20:04","20:05","20:06","20:07","20:08","20:09","20:10","20:11","20:12","20:13","20:14","20:15","20:16","20:17","20:18","20:19","20:20","20:21","20:22","20:23","20:24","20:25","20:26","20:27","20:28","20:29","20:30","20:31","20:32","20:33","20:34","20:35","20:36","20:37","20:38","20:39","20:40","20:41","20:42","20:43","20:44","20:45","20:46","20:47","20:48","20:49","20:50","20:51","20:52","20:53","20:54","20:55","20:56","20:57","20:58","20:59","21:00","21:01","21:02","21:03","21:04","21:05","21:06","21:07","21:08","21:09","21:10","21:11","21:12","21:13","21:14","21:15","21:16","21:17","21:18","21:19","21:20","21:21","21:22","21:23","21:24","21:25","21:26","21:27","21:28","21:29","21:30","21:31","21:32","21:33","21:34","21:35","21:36","21:37","21:38","21:39","21:40","21:41","21:42","21:43","21:44","21:45","21:46","21:47","21:48","21:49","21:50","21:51","21:52","21:53","21:54","21:55","21:56","21:57","21:58","21:59","22:00","22:01","22:02","22:03","22:04","22:05","22:06","22:07","22:08","22:09","22:10","22:11","22:12","22:13","22:14","22:15","22:16","22:17","22:18","22:19","22:20","22:21","22:22","22:23","22:24","22:25","22:26","22:27","22:28","22:29","22:30","22:31","22:32","22:33","22:34","22:35","22:36","22:37","22:38","22:39","22:40","22:41","22:42","22:43","22:44","22:45","22:46","22:47","22:48","22:49","22:50","22:51","22:52","22:53","22:54","22:55","22:56","22:57","22:58","22:59","23:00","23:01","23:02","23:03","23:04","23:05","23:06","23:07","23:08","23:09","23:10","23:11","23:12","23:13","23:14","23:15","23:16","23:17","23:18","23:19","23:20","23:21","23:22","23:23","23:24","23:25","23:26","23:27","23:28","23:29","23:30","23:31","23:32","23:33","23:34","23:35","23:36","23:37","23:38","23:39","23:40","23:41","23:42","23:43","23:44","23:45","23:46","23:47","23:48","23:49","23:50","23:51","23:52","23:53","23:54","23:55","23:56","23:57","23:58","23:59","0:00"];
	
	if(actionNo>=1440) actionNo=1;
	var d=conf[actionNo-1].split(':');
	var date=new Date();
	var time=date.getTime();
	var delay=10000;
	date.setSeconds(0);
	date.setHours(d[0]);
	date.setMinutes(d[1]);
	return 8000;  //5���
}