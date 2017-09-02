Feature: Application
  In order to access the application
  As a client
  I need to be able make requests into it
  @application
  Scenario: Request endpoint without required headers
    When I send a GET request to "/api/v1/ping"
    Then the response code should be 200

  @order
  Scenario: Create order
    When I send a POST request to "/api/v1/dafiti/walmart/order/create" with body:
    """
    {
      "orderId" : "MKT-1000121920192",
      "items" : [ {
        "id" : "SPTLUIZA245245",
        "quantity" : 1,
        "price" : 485.99,
        "commission" : 10,
        "freightCommission" : 2
      } ],
      "clientProfileData" : {
        "email" : "basilio.jafet@palaciodoscedros.com.br",
        "firstName" : "Basílio Jafet Pereira",
        "lastName" : "Silva",
        "document" : "1234567890",
        "phone" : "1234567890",
        "corporateName" : "Nami Jafet e Irmãos",
        "tradeName" : "Nami Jafet e Irmãos",
        "corporateDocument" : "12345678901234567890",
        "stateInscription" : "20000516122345",
        "corporatePhone" : "1257890",
        "isCorporate" : true
      },
      "shippingData" : {
        "address" : {
          "addressId" : "Minha Casa",
          "addressType" : "residential",
          "receiverName" : "Adma Jafet",
          "postalCode" : "03424-101",
          "city" : "São Paulo",
          "state" : "SP",
          "country" : "BRA",
          "street" : "Rua Bom Pastor",
          "number" : "800",
          "neighborhood" : "Ipiranga",
          "complement" : "complement:69",
          "reference" : "Próximo ao Museu do Ipiranga"
        },
        "logisticsInfo" : [ {
          "item" : 0,
          "shippingType" : "Normal",
          "shippingLockTTL" : "2d",
          "shippingEstimate" : "5d",
          "price" : 10.99,
          "deliveryWindow" : null
        }, {
          "item" : 1,
          "shippingType" : "Normal",
          "shippingLockTTL" : "2d",
          "shippingEstimate" : "5d",
          "price" : 10.99,
          "deliveryWindow" : null
        } ]
      }
    }
    """
    Then the response code should be 200

  @order
  Scenario: Create order with another seller
  When I send a POST request to "/api/v1/dafiti/natue/order/create" with body:
  """
  {
    "orderId" : "MKT-1000121920192",
    "items" : [ {
      "id" : "JAKJSAOOK",
      "quantity" : 1,
      "price" : 485.99,
      "commission" : 10,
      "freightCommission" : 2
    } ],
    "clientProfileData" : {
      "email" : "basilio.jafet@palaciodoscedros.com.br",
      "firstName" : "Basílio Jafet Pereira",
      "lastName" : "Silva",
      "document" : "1234567890",
      "phone" : "1234567890",
      "corporateName" : "Nami Jafet e Irmãos",
      "tradeName" : "Nami Jafet e Irmãos",
      "corporateDocument" : "12345678901234567890",
      "stateInscription" : "20000516122345",
      "corporatePhone" : "1257890",
      "isCorporate" : true
    },
    "shippingData" : {
      "address" : {
        "addressId" : "Minha Casa",
        "addressType" : "residential",
        "receiverName" : "Adma Jafet",
        "postalCode" : "03424-101",
        "city" : "São Paulo",
        "state" : "SP",
        "country" : "BRA",
        "street" : "Rua Bom Pastor",
        "number" : "800",
        "neighborhood" : "Ipiranga",
        "complement" : "complement:69",
        "reference" : "Próximo ao Museu do Ipiranga"
      },
      "logisticsInfo" : [ {
        "item" : 0,
        "shippingType" : "Normal",
        "shippingLockTTL" : "2d",
        "shippingEstimate" : "5d",
        "price" : 10.99,
        "deliveryWindow" : null
      }, {
        "item" : 1,
        "shippingType" : "Normal",
        "shippingLockTTL" : "2d",
        "shippingEstimate" : "5d",
        "price" : 10.99,
        "deliveryWindow" : null
      } ]
    }
  }
  """
  Then the response code should be 400

  @order
  Scenario: Create order with another seller
    When I send a POST request to "/api/v1/dafiti/natue/order/create" with body:
    """
    {
      "orderId" : "MKT-1000121920192",
      "items" : [ {
        "id" : "SPTLUIZA245245",
        "quantity" : 1,
        "price" : 485.99,
        "commission" : 10,
        "freightCommission" : 2
      } ],
      "clientProfileData" : {
        "email" : "basilio.jafet@palaciodoscedros.com.br",
        "firstName" : "Basílio Jafet Pereira",
        "lastName" : "Silva",
        "document" : "1234567890",
        "phone" : "1234567890",
        "corporateName" : "Nami Jafet e Irmãos",
        "tradeName" : "Nami Jafet e Irmãos",
        "corporateDocument" : "12345678901234567890",
        "stateInscription" : "20000516122345",
        "corporatePhone" : "1257890",
        "isCorporate" : true
      },
      "shippingData" : {
        "address" : {
          "addressId" : "Minha Casa",
          "addressType" : "residential",
          "receiverName" : "Adma Jafet",
          "postalCode" : "03424-101",
          "city" : "São Paulo",
          "state" : "SP",
          "country" : "BRA",
          "street" : "Rua Bom Pastor",
          "number" : "800",
          "neighborhood" : "Ipiranga",
          "complement" : "complement:69",
          "reference" : "Próximo ao Museu do Ipiranga"
        },
        "logisticsInfo" : [ {
          "item" : 0,
          "shippingType" : "Normal",
          "shippingLockTTL" : "2d",
          "shippingEstimate" : "5d",
          "price" : 10.99,
          "deliveryWindow" : null
        }, {
          "item" : 1,
          "shippingType" : "Normal",
          "shippingLockTTL" : "2d",
          "shippingEstimate" : "5d",
          "price" : 10.99,
          "deliveryWindow" : null
        } ]
      }
    }
    """
    Then the response code should be 200