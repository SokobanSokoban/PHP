<?php

<?class DB {

        protected static $_instance;  //��������� �������
  
        public static function getInstance() { // �������� ��������� ������� ������ 
            if (self::$_instance === null) { // ���� ��������� ������� ������  �� ������
                self::$_instance = new self;  // ������� ��������� ������� ������ 
            } 
            return self::$_instance; // ���������� ��������� ������� ������
        }
   
        private  function __construct() { // ����������� ������������ ���� ��� ��� ������ DB::getInstance();
                echo "<br/><em>1.  ��������� ���������� � ������...";
                //������������ � ��
                $this->connect = mysql_connect(HOST, USER, PASSWORD) or die("���������� ���������� ����������".mysql_error());
                // �������� �������
                echo "<br/>2.  ����� ����...";
                mysql_select_db(NAME_BD, $this->connect) or die ("���������� ������� ��������� ����".mysql_error());
                // ������������� ��������� �������
                echo "<br/>3.  ������������� ��������� ����: ";
                $this->query('SET names "utf8"');   
                echo "<br/> ����������� ������� ������ ���������� � ��! � ��������� ���������.</em>";
        
        }
 
        private function __clone() { //��������� ������������ ������� ������������� private
        }
        
        private function __wakeup() {//��������� ������������ ������� ������������� private
        }
   
        public static function query($sql) {
        
            $obj=self::$_instance;
        
            if(isset($obj->connect)){ 
                $obj->count_sql++;
                $start_time_sql = microtime(true);
                $result=mysql_query($sql)or die("<br/><span style='color:red'>������ � SQL �������:</span> ".mysql_error());
                $time_sql = microtime(true) - $start_time_sql;
                echo "<br/><br/><span style='color:blue'> <span style='color:green'># ������ ����� ".$obj->count_sql.": </span>".$sql."</span> <span style='color:green'>(".round($time_sql,4)." msec )</span>";             
                
                return $result;
            }
            return false;
        }   
    
   
    
}