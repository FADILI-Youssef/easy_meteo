create or replace trigger climat_cle_primaire
before insert on climat
for each row

begin

 if exists (select id from climat where `date` = new.date and id_station = new.id_station) then
    set new.date = null;
 end if;

end;