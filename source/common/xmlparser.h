/*
  ������ � XML �������, ������� MsXml, ��������� ComLibrary.

  ����������: �� ������������� �������� ���������� ������� �� ������� ���������.
*/
#pragma once

namespace XmlParser
{
  //������ �� ������.
  typedef struct
  {
    int line;       //����� ������.
    int errorCode;  //��� ������.
    LPWSTR reason;  //����� ������.
  }XMLERRORDATA;

  /*
    �������������.
  */
  void init(void);

  /*
    ���������������.
  */
  void uninit(void);

  /*
    �������� XML �����.

    IN file   - ��� ����� ��� ��������.
    OUT error - ���������� �� ������, ��� �� ��������������. ����� ���� NULL.
                � ������ ������������� ������, ��� ��������� ������ ���� ����������� �����
                freeXmlErrorData.

    Return    - � ������ ������ ������ XML �����, ������� ������ ���� ������� ����� CloseFile.
                � ������ ������ NULL.
  */
  IXMLDOMDocument *_openFile(const LPWSTR file, XMLERRORDATA *error);

  /*
    �������� XML �����.

    IN doc - ��������� �� ������ ����� ��� ��������.
  */
  void _closeFile(IXMLDOMDocument *doc);

  /*
    ������������ ��������� XMLERRORDATA.

    IN pError - ��������� ��� ������������.
  */
  void _freeXmlErrorData(XMLERRORDATA *pError);

  /*
    ��������� ����������� ��������.

    IN root - ������� ������������� ��������� ���������� ����� node.
    IN node - ������� ��� ����� � XPath. �� ����� ���� NULL.

    Return  - ����� � ������ ������ (����� ���������� ����� _freeBstr()),
              ��� NULL � ������ ������.
  */
  BSTR _getNodeTextOfElement(IXMLDOMElement *root, const BSTR node);
  
  /*
    ��������� ����������� ��������.

    IN root - ������� ������������� ��������� ���������� ����� node.
    IN node - ������� ��� ����� � XPath. �� ����� ���� NULL.

    Return  - ����� � ������ ������ (����� ���������� ����� _freeBstr()),
              ��� NULL � ������ ������.
  */
  BSTR _getNodeTextOfNode(IXMLDOMNode *root, const BSTR node);

  /*
    ������������ BSTR ����� SysFreeString().

    IN OUT string - ������.
  */
  void _freeBstr(BSTR string);
};
