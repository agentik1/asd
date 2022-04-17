<?php 
header('Content-Type: text/html; charset=utf-8');
require_once'student.php';
require_once'group.php';
require_once'discipline.php';
require_once'teacher.php';

function loadStudents($group, $path) {
	$file = nl2br(file_get_contents($path));
	$students = explode('<br />', $file);
	foreach ($students as $s) {
		$tmp= explode(';',$s);
		$surname = $tmp[0];
		$name = $tmp[1];
		$patr = $tmp[2];
		new Student($name, $surname, $patr, $group);
	}
}
$g1 = new Group(1,'и-01');
$g2 = new Group(2,'и-02');
$g3 = new Group(3,'и-03');



$d1 = new Discipline(1,'Прикладное програмное обеспечение');
$d2 = new Discipline(2,'укываавы');
$d3 = new Discipline(3,'епкпе');
$d4 = new Discipline(4,'рпрпа');

$g1->addDiscipline($d1);
$g2->addDiscipline($d2);
$g3->addDiscipline($d3);
loadStudents($g3,'i03.txt');

$t1 = new Teacher('dffd','fdfd','fdfdg');
$t2 = new Teacher('df564d','fdf65d','fd34fdg');

$t1->addDiscipline($d1);
$t2->addDiscipline($d2);


//g3->display();
$t1->display();
 ?>