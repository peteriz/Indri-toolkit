
include ../MakeDefns
SHARED=
INCPATH=-I../include $(patsubst %, -I../contrib/%/include, $(DEPENDENCIES))
LIBPATH=-L../obj  $(patsubst %, -L../contrib/%/obj, $(DEPENDENCIES))
LIBS=-lindri $(patsubst %, -l%, $(DEPENDENCIES))
APP=IndriRunQuery
INDRIRM=IndriRunQueryRM

all:
	$(CXX) $(CXXFLAGS) $(APP).cpp -o $(APP) $(LIBPATH) $(LIBS) $(CPPLDFLAGS)
	$(CXX) $(CXXFLAGS) $(INDRIRM).cpp -o $(APP) $(LIBPATH) $(LIBS) $(CPPLDFLAGS)

install:
	$(INSTALL_PROGRAM) $(APP) $(bindir)

clean:
	rm -f $(APP) $(INDRIRM)

