/*avg salary of managers*/
1)select avg(salary) as average_salary
from employee as emp,dairy
where emp.ssn=dairy.mgr_ssn;

/*2)ssn of all employees who have daughter*/
select Dependent_name,ssn,relationship
from employee,dependent
where  dependent.relationship='daughter' and Essn=ssn;

/*3)toget totalcost*/
select (no_of_items*cost) as totalcost
from bill natural join milkproducts;

/*4)dno which have more than 3 employees and no of employee having sal>20000*/
select dno,count(*)
from employee
where salary>20000 and dno in
	(select dno
	 from employee
	 group by dno
	 having count(*)>3)
group by dno;

/*5)sum,avg,max,min of salary of employees*/
select dname,sum(salary),max(salary),min(salary),avg(salary)
from employee,dairy
where dno=dnumber
group by dname;

/*6)product names that are not purchased by any customer*/
select pname
from milkproducts as mp
where not exists (select pid
				  from Bill
				  where mp.pid=bill.pid);
	
/*7)retrieve number of employees working under each supervisor*/
select super_ssn,count(*)
from employee as emp
where super_ssn in
   (select distinct super_ssn
    from employee)
group by super_ssn;
	















