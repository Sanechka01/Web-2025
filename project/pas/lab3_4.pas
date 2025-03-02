PROGRAM SarahRevere(INPUT, OUTPUT);
USES
    DOS;
VAR
    Query, Name: STRING;
    PosName: Integer;
BEGIN 
    Query:= GetEnv('QUERY_STRING');
    PosName := Pos('name=', Query);
    IF PosName = 1
    THEN
         Name := Copy(Query, 6, Length(Query) - 5)
    ELSE
        Name := 'Anonymous';
    WRITELN('Content-Type: text/plain');
    WRITELN;
    WRITELN('Hello, dear ', Name, '!')
END.