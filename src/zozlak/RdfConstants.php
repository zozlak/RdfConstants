<?php

/*
 * The MIT License
 *
 * Copyright 2019 Mateusz Żółtak.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace zozlak;

/**
 * Just a container for RDF and XSD related constants
 *
 * @author zozlak
 */
class RdfConstants {

    const RDF_TYPE                      = 'http://www.w3.org/1999/02/22-rdf-syntax-ns#type';
    const RDFS_COMMENT                  = 'http://www.w3.org/2000/01/rdf-schema#comment';
    const RDFS_DOMAIN                   = 'http://www.w3.org/2000/01/rdf-schema#domain';
    const RDFS_RANGE                    = 'http://www.w3.org/2000/01/rdf-schema#range';
    const RDFS_SUB_CLASS_OF             = 'http://www.w3.org/2000/01/rdf-schema#subClassOf';
    const RDFS_SUB_PROPERTY_OF          = 'http://www.w3.org/2000/01/rdf-schema#subPropertyOf';
    const OWL_CARDINALITY               = 'http://www.w3.org/2002/07/owl#cardinality';
    const OWL_CLASS                     = 'http://www.w3.org/2002/07/owl#Class';
    const OWL_DATATYPE_PROPERTY         = 'http://www.w3.org/2002/07/owl#DatatypeProperty';
    const OWL_MIN_CARDINALITY           = 'http://www.w3.org/2002/07/owl#minCardinality';
    const OWL_MIN_QUALIFIED_CARDINALITY = 'http://www.w3.org/2002/07/owl#minQualifiedCardinality';
    const OWL_MAX_CARDINALITY           = 'http://www.w3.org/2002/07/owl#maxCardinality';
    const OWL_MAX_QUALIFIED_CARDINALITY = 'http://www.w3.org/2002/07/owl#maxQualifiedCardinality';
    const OWL_OBJECT_PROPERTY           = 'http://www.w3.org/2002/07/owl#ObjectProperty';
    const OWL_ON_CLASS                  = 'http://www.w3.org/2002/07/owl#onClass';
    const OWL_ON_DATA_RANGE             = 'http://www.w3.org/2002/07/owl#onDataRange';
    const OWL_ON_PROPERTY               = 'http://www.w3.org/2002/07/owl#onProperty';
    const OWL_QUALIFIED_CARDINALITY     = 'http://www.w3.org/2002/07/owl#qualifiedCardinality';
    const OWL_RESTRICTION               = 'http://www.w3.org/2002/07/owl#Restriction';
    const SKOS_ALT_LABEL                = 'http://www.w3.org/2004/02/skos/core#altLabel';
    const XSD_ANY_URI                   = 'http://www.w3.org/2001/XMLSchema#anyURI';
    const XSD_BASE64_BINARY             = 'http://www.w3.org/2001/XMLSchema#base64Binary';
    const XSD_BOOLEAN                   = 'http://www.w3.org/2001/XMLSchema#boolean';
    const XSD_BYTE                      = 'http://www.w3.org/2001/XMLSchema#byte';
    const XSD_DATE                      = 'http://www.w3.org/2001/XMLSchema#date';
    const XSD_DATE_TIME                 = 'http://www.w3.org/2001/XMLSchema#dateTime';
    const XSD_DECIMAL                   = 'http://www.w3.org/2001/XMLSchema#decimal';
    const XSD_DOUBLE                    = 'http://www.w3.org/2001/XMLSchema#double';
    const XSD_DURATION                  = 'http://www.w3.org/2001/XMLSchema#duration';
    const XSD_ENTITY                    = 'http://www.w3.org/2001/XMLSchema#ENTITY';
    const XSD_ENTITIES                  = 'http://www.w3.org/2001/XMLSchema#ENTITIES';
    const XSD_FLOAT                     = 'http://www.w3.org/2001/XMLSchema#float';
    const XSD_G_DAY                     = 'http://www.w3.org/2001/XMLSchema#gDay';
    const XSD_G_MONTH                   = 'http://www.w3.org/2001/XMLSchema#gMonth';
    const XSD_G_MONTH_DAY               = 'http://www.w3.org/2001/XMLSchema#gMonthDay';
    const XSD_G_YEAR                    = 'http://www.w3.org/2001/XMLSchema#gYear';
    const XSD_G_YEAR_MONTH              = 'http://www.w3.org/2001/XMLSchema#gYearMonth';
    const XSD_HEX_BINARY                = 'http://www.w3.org/2001/XMLSchema#hexBinary';
    const XSD_ID                        = 'http://www.w3.org/2001/XMLSchema#ID';
    const XSD_IDREF                     = 'http://www.w3.org/2001/XMLSchema#IDREF';
    const XSD_IDREFS                    = 'http://www.w3.org/2001/XMLSchema#IDREFS';
    const XSD_INT                       = 'http://www.w3.org/2001/XMLSchema#int';
    const XSD_INTEGER                   = 'http://www.w3.org/2001/XMLSchema#integer';
    const XSD_LANGUAGE                  = 'http://www.w3.org/2001/XMLSchema#language';
    const XSD_LONG                      = 'http://www.w3.org/2001/XMLSchema#long';
    const XSD_NAME                      = 'http://www.w3.org/2001/XMLSchema#Name';
    const XSD_NC_NAME                   = 'http://www.w3.org/2001/XMLSchema#NCName';
    const XSD_NM_TOKEN                  = 'http://www.w3.org/2001/XMLSchema#NMTOKEN';
    const XSD_NM_TOKENS                 = 'http://www.w3.org/2001/XMLSchema#NMTOKENS';
    const XSD_NEGATIVE_INTEGER          = 'http://www.w3.org/2001/XMLSchema#negativeInteger';
    const XSD_NON_NEGATIVE_INTEGER      = 'http://www.w3.org/2001/XMLSchema#nonNegativeInteger';
    const XSD_NON_POSITIVE_INTEGER      = 'http://www.w3.org/2001/XMLSchema#nonPositiveInteger';
    const XSD_NORMALIZED_STRING         = 'http://www.w3.org/2001/XMLSchema#normalizedString';
    const XSD_NOTATION                  = 'http://www.w3.org/2001/XMLSchema#NOTATION';
    const XSD_POSITIVE_INTEGER          = 'http://www.w3.org/2001/XMLSchema#positiveInteger';
    const XSD_QNAME                     = 'http://www.w3.org/2001/XMLSchema#QName';
    const XSD_SHORT                     = 'http://www.w3.org/2001/XMLSchema#short';
    const XSD_STRING                    = 'http://www.w3.org/2001/XMLSchema#string';
    const XSD_TIME                      = 'http://www.w3.org/2001/XMLSchema#time';
    const XSD_TOKEN                     = 'http://www.w3.org/2001/XMLSchema#token';
    const XSD_UNSIGNED_BYTE             = 'http://www.w3.org/2001/XMLSchema#unsignedByte';
    const XSD_UNSIGNED_INT              = 'http://www.w3.org/2001/XMLSchema#unsignedInt';
    const XSD_UNSIGNED_LONG             = 'http://www.w3.org/2001/XMLSchema#unsignedLong';
    const XSD_UNSIGNED_SHORT            = 'http://www.w3.org/2001/XMLSchema#unsignedShort';

}
