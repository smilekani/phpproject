<div>
<?php include 'heading.php';?>
</div>
<div class="menu">
<?php include 'menu.php';?>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-2">
		<div>
		<?php include 'javamenu.php';?>
		</div>
    </div>
    <div class="col-sm-8">
      <h3>Simple Step to Create a Hibernate Application Eclipse</h3>
	  <h2>The Way Java Works</h2>
		<p>Create the Database Configuration and Mapping with Java Objects in a File named as <b>hibernate.cfg.xml</b></p></div><br>
		<pre> <?xml version='1.0' encoding='UTF-8'?>  
<!DOCTYPE hibernate-configuration PUBLIC  
          "-//Hibernate/Hibernate Configuration DTD 3.0//EN"  
          "http://hibernate.sourceforge.net/hibernate-configuration-3.0.dtd">  
  
<hibernate-configuration>  
  
    <session-factory>  
        <property name="hbm2ddl.auto">update</property>  
        <property name="dialect">org.hibernate.dialect.MySQLDialect</property>  
        <property name="connection.url">jdbc:mysql://localhost/kani?createDatabaseIfNotExist=true</property>  
        <property name="connection.username">root</property>  
        <property name="connection.password"></property>  
        <property name="connection.driver_class">com.mysql.jdbc.Driver</property>  
    <mapping resource="Person.hbm.xml"/>  
    </session-factory>  
  
</hibernate-configuration>  
</pre>
<p>Create a Object as Person.java</p>
package com.kani.hibernate;<pre>
import java.io.Serializable;

public class Person implements Serializable
{
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	private int id;
	private String name;
	private String address;

	public Person() {
	}

	public Person(String name, String address) {
		super();
		this.name = name;
		this.address = address;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getAddress() {
		return address;
	}

	public void setAddress(String address) {
		this.address = address;
	}

	@Override
	public String toString() {
		return "Person [name=" + name + ", address=" + address + "]";
	}

}
</pre>
<p>Create a Mapping file the Object Person.java as follows</p>
<p><?xml version='1.0' encoding='UTF-8'?>  
<!DOCTYPE hibernate-mapping PUBLIC  
 "-//Hibernate/Hibernate Mapping DTD 3.0//EN"  
 "http://hibernate.sourceforge.net/hibernate-mapping-3.0.dtd">  
  
 <hibernate-mapping>  
  <class name="com.kani.hibernate.Person" table="Persons">  
    <id name="id">  
     <generator class="increment"></generator>  
    </id>  
            
    <property name="name"></property>  
    <property name="address"></property>  
            
  </class>  
            
 </hibernate-mapping></p>
 <p>Run the Demo Class and see the Result</p>
 <p>package com.kani.hibernate;

import org.hibernate.Session;  
import org.hibernate.SessionFactory;  
import org.hibernate.Transaction;  
import org.hibernate.cfg.Configuration;  

public class HibernateDemo 
{  
	public static void main(String[] args) 
	{  
		//creating configuration object  
		Configuration cfg=new Configuration();  
		cfg.configure("hibernate.cfg.xml");//populates the data of the configuration file  
		//creating session factory object  
		SessionFactory factory=cfg.buildSessionFactory();  

		//creating session object  
		Session session=factory.openSession();  

		//creating transaction object  
		Transaction t=session.beginTransaction();  
		Person person = new Person();

		person.setName("kanimozhi");
		person.setAddress("Chennai");
		session.persist(person);

		t.commit();//transaction is commited  
		session.close();  //closing the session

		System.out.println("successfully saved");  

	}  
}  </p>
	 <div class="row">
	  <div class="col-sm-2">
	  <form action="javabasic.php" method="post">
	  <div class="form-group">
        <div class="col-md-offset-2 col-sm-2">
          <div class="submit">
            <label>
			  <button type="submit" class="btn btn-default" disabled>Prev</button>
          </div>
        </div>
      </div>
	  </form>
	  </div>
	  <div class="col-sm-10">
	  <form action="javafirstprog.php" method="post">
	  <div class="form-group">
        <div class="col-md-offset-10 col-sm-2">
          <div class="submit">
            <label>
			  <button type="submit" class="btn btn-default">Next</button>
          </div>
        </div>
      </div>
	  </form>
	  </div>
    </div>
	</div>
<div>
<?php include 'javafooter.php';?>
</div>