import React from "react";

function Sales() {
  return (
    <div className="min-h-screen flex items-center justify-center bg-gray-100">
      <div className="bg-white p-6 rounded-lg shadow-lg w-full max-w-4xl">
        <h2 className="text-2xl font-bold mb-6 text-gray-900">Ventas</h2>
        <div className="overflow-x-auto">
          <table className="min-w-full bg-white">
            <thead>
              <tr>
                <th className="py-2 px-4 border-b-2 border-gray-300 bg-gray-200 text-left text-sm font-semibold text-gray-700">
                  Producto
                </th>
                <th className="py-2 px-4 border-b-2 border-gray-300 bg-gray-200 text-left text-sm font-semibold text-gray-700">
                  Cantidad
                </th>
                <th className="py-2 px-4 border-b-2 border-gray-300 bg-gray-200 text-left text-sm font-semibold text-gray-700">
                  Precio
                </th>
              </tr>
            </thead>
            <tbody>{/* Aquí irán las ventas eventualmente */}</tbody>
          </table>
        </div>
      </div>
    </div>
  );
}

export default Sales;
