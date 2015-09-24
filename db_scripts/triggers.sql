create or replace trigger climat_cle_primaire
before insert on climat
for each row

begin

 if exists (select id from climat where `date` = new.date) then
    set new.date = null;
 end if;

end;