# Logger
Для создания log файла необходимо вызвать $msg=new logger\message('$text','$output', '$channel');


Где:
$text - текст в лог файле
$output - выбор отправки лога('log1.txt' - для файла log1.txt,'log1.txt' - для файла log1.txt, console - в консоль, slack - отправить сообщение в Slack), $channel - выбрать канал если выбран Slack, в формате "#{название канала}"( например "#dev")
. $channel является не обязательным параметром.
