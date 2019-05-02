/*
  ������������ �� ������ BeaEngine.
  http://beatrix2004.free.fr/BeaEngine/

  ����������: ������ ������� ����������, ������ ��� �������������� ��� ��������������� ��� x32,
              x64.
*/
#pragma once

namespace Disasm
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
    ��������� ����� ������.

    IN pAddress - ����� ������.

    Return - ����� ������, ��� ((DWORD)-1) � ������ ������.
  */
  DWORD _getOpcodeLength(void *pAddress);
};