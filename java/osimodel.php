<div>
<?php include 'heading.php';?>
</div>
<div class="menu">
<?php include 'menu.php';?>
</div>
<div class="container">
  <div class="row">
  <div class="col-sm-10">
      <h3>Open Systems Interconnection Model (OSI Model)</h3>
	  <h4><b>Definition - What does Open Systems Interconnection Model (OSI Model) mean?</b></h4>
	<p class="normal">The Open Systems Interconnection (OSI) Model is a conceptual and logical layout that defines network communication 
	used by systems open to interconnection and communication with other systems.
	The model is broken into seven subcomponents, or layers, each of which represents a conceptual collection of services provided to the layers above and 
	below it. The OSI Model also defines a logical network and effectively describes computer packet transfer by using different layer protocols.
		The OSI Model may also be referred to as the seven-layer OSI Model or the seven-layer model.
		
		The OSI Model was developed by the International Organization for Standardization (ISO) in 1978. 
		While working on a network framework, ISO decided to develop the seven-layer model.
		OSI’s seven layers are divided into two portions: hot layers and media layers. 
		The hot portion includes the application, presentation, session and transport layers;
		the media portion includes the network, data link and physical layers.
		The OSI Model works in a hierarchy, assigning tasks to all seven layers. Each layer is responsible for performing assigned tasks 
		and transferring completed tasks to the next layer for further processing. Today, many protocols are developed based on 
		the OSI Model working mechanism.
	</p></br>
	<p class="normal">The Open System Interconnection (OSI) model defines a networking framework to implement protocols in seven layers. There is really nothing to the OSI model. In fact, it's not even tangible. The OSI model doesn't perform any functions in the networking process. It is a conceptual framework so we can better understand complex interactions that are happening.
Who Developed the OSI?
The International Standards Organization (ISO) developed the Open Systems Interconnection (OSI) model. It divides network communication into seven layers. Layers 1-4 are considered the lower layers, and mostly concern themselves with moving data around. Layers 5-7, the upper layers, contain application-level data. Networks operate on one basic principle: "pass it on." Each layer takes care of a very specific job, and then passes the data onto the next layer.
The 7 Layers of the OSI
In the OSI model, control is passed from one layer to the next, starting at the application layer in one station, and proceeding to the bottom layer, over the channel to the next station and back up the hierarchy. The OSI model takes the task of inter-networking and divides that up into what is referred to as a vertical stack that consists of the following 7 layers. Click each link in the list below to read detailed information and examples of each layer:
Physical (Layer 1)
Data Link (Layer 2)
Network (Layer 3)
Transport (Layer 4)
Session (Layer 5)
Presentation (Layer 6)
Application (Layer 7)
Did You Know...? Most of the functionality in the OSI model exists in all communications systems, although two or three OSI layers may be incorporated into one. OSI is also referred to as the OSI Reference Model or just the OSI Model.
Physical (Layer 1)
OSI Model, Layer 1 conveys the bit stream - electrical impulse, light or radio signal — through the network at the electrical and mechanical level. It provides the hardware means of sending and receiving data on a carrier, including defining cables, cards and physical aspects. Fast Ethernet, RS232, and ATM are protocols with physical layer components.
Webopedia Study Guide Section Layer 1 Physical examples include Ethernet, FDDI, B8ZS, V.35, V.24, RJ45.
Data Link (Layer 2)
At OSI Model, Layer 2, data packets are encoded and decoded into bits. It furnishes transmission protocol knowledge and management and handles errors in the physical layer, flow control and frame synchronization. The data link layer is divided into two sub layers: The Media Access Control (MAC) layer and the Logical Link Control (LLC) layer. The MAC sub layer controls how a computer on the network gains access to the data and permission to transmit it. The LLC layer controls frame synchronization, flow control and error checking.

 
Webopedia Study Guide Section Layer 2 Data Link examples include PPP, FDDI, ATM, IEEE 802.5/ 802.2, IEEE 802.3/802.2, HDLC, Frame Relay. 
Network (Layer 3)
Layer 3 provides switching and routing technologies, creating logical paths, known as virtual circuits, for transmitting data from node to node. Routing and forwarding are functions of this layer, as well as addressing, internetworking, error handling, congestion control and packet sequencing.
Webopedia Study Guide Section Layer 3 Network examples include AppleTalk DDP, IP, IPX.
Transport (Layer 4)
OSI Model, Layer 4, provides transparent transfer of data between end systems, or hosts, and is responsible for end-to-end error recovery and flow control. It ensures complete data transfer.
Webopedia Study Guide Section Layer 4 Transport examples include SPX, TCP, UDP.
Session (Layer 5)
This layer establishes, manages and terminates connections between applications. The session layer sets up, coordinates, and terminates conversations, exchanges, and dialogues between the applications at each end. It deals with session and connection coordination.
Webopedia Study Guide Section Layer 5 Session examples include NFS, NetBios names, RPC, SQL.
Presentation (Layer 6)
This layer provides independence from differences in data representation (e.g., encryption) by translating from application to network format, and vice versa. The presentation layer works to transform data into the form that the application layer can accept. This layer formats and encrypts data to be sent across a network, providing freedom from compatibility problems. It is sometimes called the syntax layer.
Webopedia Study Guide Section Layer 6 Presentation examples include encryption, ASCII, EBCDIC, TIFF, GIF, PICT, JPEG, MPEG, MIDI.
Application (Layer 7)
OSI Model, Layer 7, supports application and end-user processes. Communication partners are identified, quality of service is identified, user authentication and privacy are considered, and any constraints on data syntax are identified. Everything at this layer is application-specific. This layer provides application services for file transfers, e-mail, and other network software services. Telnet and FTP are applications that exist entirely in the application level. Tiered application architectures are part of this layer.
Webopedia Study Guide Section Layer 7 Application examples include WWW browsers, NFS, SNMP, Telnet, HTTP, FTP 
DID YOU KNOW....? Two similar projects from the late 1970's were merged in 1983 to form the Basic Reference Model for Open Systems Interconnection standard (the OSI model). It was published in 1984 as standard ISO 7498.</p>
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
	<?php include 'javafooter.php';?>
	</div>
</div>
