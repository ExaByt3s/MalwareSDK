/*
  ������ � COM.
*/
#pragma once

namespace ComLibrary
{
  /*
    �������������.
  */
  void init(void);

  /*
    ���������������.
  */
  void uninit(void);

  /*
    ������������� ���������� ��� ������.

    OUT result - ��������� �������������, �� ����� ���� NULL. ������ ���� ������� � ������
                 _uninitThread().

    Return     - true - � ������ ������,
                 false - � ������ ������.
  */
  bool _initThread(HRESULT *result);

  /*
    ��������������� ���������� ��� ������. ������� ����� �������� (�������������) ���� � ������ 
    ������ _initThread(), �� � ������ ��������� initResult.
    
    IN result - ��������� ������������� �� _initThread().
  */
  void _uninitThread(HRESULT initResult);

  /*
    �������� ����������, ���������� ��� CoCreateInstance.

    IN clsid - CLSID.
    IN iid   - IID.

    Return   - ��������� �� ���������, ��� NULL - � ������ ������.
  */
  void *_createInterface(REFCLSID clsid, REFIID iid);
};
