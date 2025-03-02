PROGRAM SarahRevere(INPUT, OUTPUT);
USES
  DOS;
VAR
  Query: STRING;
BEGIN {PrintName}
  Query := GetEnv('QUERY_STRING');
  WRITELN('Content-Type: text/plain');
  WRITELN;
  IF Query = 'lanterns=1'
  THEN
    WRITELN('The British are coming by sea')
  ELSE
    IF Query = 'lanterns=2'
    THEN
      WRITELN('The British are coming by land')
    ELSE
       WRITELN('Sarah didn''t say')
END. {PrintName}